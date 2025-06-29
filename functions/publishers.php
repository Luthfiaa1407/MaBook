<?php

require_once __DIR__ . '/../config/db.php';

// --------------------------------------------
// Publisher
// --------------------------------------------

function listPublishers($filters, $pagination)
{
    global $conn;

    // build query berdasarkan filter
    $whereQuery = "";
    $where = [];
    $params = [];
    $types = [];
    if (isset($filters['search'])) {
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
    if (empty($limit)) $limit = 10;
    if (empty($page)) $page = 1;
    $offset = ($page - 1) * $limit;

    // build query
    $sql = "SELECT * FROM publishers $whereQuery ORDER BY created_at DESC LIMIT ? OFFSET ?";
    $stmt = $conn->prepare($sql);
    $allParams = array_merge($params, [$limit, $offset]);
    $typeString = implode("", $types) . 'ii';
    $stmt->bind_param($typeString, ...$allParams);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

function countPublishers($filters)
{
    global $conn;

    // build query berdasarkan filter
    $whereQuery = "";
    $where = [];
    $params = [];
    $types = [];
    if (isset($filters['search'])) {
        $where[] = 'name LIKE ?';
        $params[] = '%' . $filters['search'] . '%';
        $types[] = 's';
    }
    if (!empty($where)) {
        $whereQuery = "WHERE " . implode(" AND ", $where);
    }

    // build query
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM publishers $whereQuery");
    if (!empty($where)) {
        $stmt->bind_param(implode("", $types), ...$params);
    }
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
    return $data['total'] ?? 0;
}

function getPublisher($id)
{
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM publishers WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function createPublisher($name, $website, $description)
{
    global $conn;

    $stmt = $conn->prepare('INSERT INTO publishers (name, website, description, created_at) VALUES (?, ?, ?, NOW())');
    $stmt->bind_param('sss', $name, $website, $description);
    return $stmt->execute();
}

function editPublisher($id, $name, $website, $description)
{
    global $conn;

    $stmt = $conn->prepare('UPDATE publishers SET name = ?, website = ?, description = ? WHERE id = ?');
    $stmt->bind_param('sssi', $name, $website, $description, $id);
    return $stmt->execute();
}

function deletePublisher($id)
{
    global $conn;

    $stmt = $conn->prepare('DELETE FROM publishers WHERE id = ?');
    $stmt->bind_param('i', $id);
    return $stmt->execute();
}