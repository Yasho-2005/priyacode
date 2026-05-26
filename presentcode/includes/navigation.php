<?php
// List of your tutorial files in order
$pages = ['c.php', 'c_features.php', 'c_keywords.php', 'c_datatypes.php','c_program.php','c_if-else.php',
'c_switch.php','c_loops.php','c_do-while.php', 'c_while.php', 'c_for.php', 'c_break.php', 'c_continue.php', 'c_1d_array.php', 'c_2d_array.php', 'c_3d_array.php', 'c_pointer.php', 'c_dou_pointer.php', 'c_functions.php', 'c_user_function.php', 'c_real_function.php', 'c_value_ref.php','c_recur.php', 'c_strings.php', 'c_structure.php', 'c_file_handl.php','c_memory.php'];

// Get the current file name
$current = basename($_SERVER['PHP_SELF']);

// Find the current index
$index = array_search($current, $pages);

// Calculate previous and next pages
$prev = $index > 0 ? $pages[$index - 1] : null;
$next = $index < count($pages) - 1 ? $pages[$index + 1] : null;
?>
