<?php
// List of SQL tutorial files in order
$pages = [
    'sql_intro.php',
    'sql_features.php',
    'sql_history.php',
    'sql_create.php',
    'sql_drop.php',
    'sql_alter.php',
    'sql_truncate.php',
    'sql_insert.php',
    'sql_update.php',
    'sql_delete.php',
    'sql_grant.php',
    'sql_revoke.php',
    'sql_commit.php',
    'sql_rollback.php',
    'sql_savepoint.php',
    'sql_having.php',
    'sql_join.php',
    'sql_inner_join.php',
    'sql_left_join.php',
    'sql_right_join.php',
    'sql_full_join.php',
    'sql_constraints.php',
    'sql_alter.php',
    'sql_drop.php',
    'sql_truncate.php'
];

// Get the current file name
$current = basename($_SERVER['PHP_SELF']);

// Find the current index in the SQL pages
$index = array_search($current, $pages);

// Calculate previous and next pages
$prev = $index > 0 ? $pages[$index - 1] : null;
$next = $index < count($pages) - 1 ? $pages[$index + 1] : null;
?>
