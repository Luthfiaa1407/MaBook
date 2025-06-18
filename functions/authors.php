<?php

require_once __DIR__ . '/../config/db.php';

// --------------------------------------------
// Author
// --------------------------------------------

function listAuthors(array $filters = [], array $pagination = []): array
{
    global $conn;

    // build query berdasarkan filter
    $whereQuery = "";
    $where = [];
    $params = [];
    $types = [];
    
    if (isset($filters['search']) && !empty($filters['search'])) {
        $where[] = 'name LIKE ?';
        $params[] = '%' . $filters['search'] . '%';
        $types[] = 's';
    }
    
    if (!empty($where)) {
        $whereQuery = "WHERE " . implode(" AND ", $where);
    }

    // apply filter pagination
    $limit = $pagination['limit'] ?? 10;
    $page = $pagination['page'] ?? 1;
    $limit = max(1, (int)$limit);  // ensure limit is at least 1
    $page = max(1, (int)$page);    // ensure page is at least 1
    $offset = ($page - 1) * $limit;

    // build query
    $sql = "SELECT * FROM authors $whereQuery ORDER BY created_at DESC LIMIT ? OFFSET ?";
    $stmt = $conn->prepare($sql);
    
    // Combine types and params
    $allParams = array_merge($params, [$limit, $offset]);
    $allTypes = implode("", $types) . 'ii';  // limit and offset are integers
    
    if (!empty($allTypes)) {
        $stmt->bind_param($allTypes, ...$allParams);
    }
    
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

function countAuthors(array $filters = []): int
{
    global $conn;

    // build query berdasarkan filter
    $whereQuery = "";
    $where = [];
    $params = [];
    $types = [];
    
    if (isset($filters['search']) && !empty($filters['search'])) {
        $where[] = 'name LIKE ?';
        $params[] = '%' . $filters['search'] . '%';
        $types[] = 's';
    }
    
    if (!empty($where)) {
        $whereQuery = "WHERE " . implode(" AND ", $where);
    }

    // build query
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM authors $whereQuery");
    
    if (!empty($params)) {
        $stmt->bind_param(implode("", $types), ...$params);
    }
    
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
    return (int)($data['total'] ?? 0);
}

function getAuthor(int $id): ?array
{
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM authors WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc() ?: null;
}

function createAuthor(string $name, string $website, string $description): bool
{
    global $conn;

    $stmt = $conn->prepare('INSERT INTO authors (name, website, description, created_at) VALUES (?, ?, ?, NOW())');
    $stmt->bind_param('sss', $name, $website, $description);
    return $stmt->execute();
}

function editAuthor(int $id, string $name, string $website, string $description): bool
{
    global $conn;

    $stmt = $conn->prepare('UPDATE authors SET name = ?, website = ?, description = ? WHERE id = ?');
    $stmt->bind_param('sssi', $name, $website, $description, $id);
    return $stmt->execute();
}

function deleteAuthor(int $id): bool
{
    global $conn;

    $stmt = $conn->prepare('DELETE FROM authors WHERE id = ?');
    $stmt->bind_param('i', $id);
    return $stmt->execute();
}