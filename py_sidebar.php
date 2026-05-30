<div class="sidebar">
    <ul>
        <li class="side-items dropdown">
            <h3 class="">Operators</h3>
            <ul class="dropdown-menu">
                <li><a href="py_arithmetic.php">Arithmetic</a></li>
                <li><a href="py_comparison.php">Comparison</a></li>
                <li><a href="py_logical.php">Logical</a></li>
                <li><a href="py_identity.php">Identity</a></li>
                <li><a href="py_memb.php">Membership</a></li>
                <li><a href="py_walrus.php">Walrus</a></li>
                <li><a href="py_ternary.php">Ternary</a></li>
                <li><a href="sql_game3.php">Special operators</a></li>
            </ul>
        </li>

        <li class="side-items dropdown">
            <h3 class="">Collections</h3>
            <ul class="dropdown-menu">
                <li class="dropdown-sub-item">
                    <a href="javascript:void(0);" class="list-toggle-btn" style="font-weight: bold; color: #58a6ff;">
                        List <i class="fa-solid fa-caret-down" style="font-size: 0.8rem; margin-left: 5px;"></i>
                    </a>
                    <ul class="list-sub-items" style="display: none; list-style: none; padding-left: 15px;">
                        <li><a href="py_list.php" style="font-style: italic;">- Overview & Rules</a></li>
                        <li><a href="py_access_list_items.php">- Access List Items</a></li>
                        <li><a href="py_change_list_items.php">- Change List Items</a></li>
                        <li><a href="py_add_list_items.php">- Add List Items</a></li>
                        <li><a href="py_remove_list_items.php">- Remove List Items</a></li>
                        <li><a href="py_loop_lists.php">- Loop Lists</a></li>
                        <li><a href="py_list_comprehension.php">- List Comprehension</a></li>
                    </ul>
                </li>

                <li class="dropdown-sub-item">
                    <a href="javascript:void(0);" class="tuple-toggle-btn" style="font-weight: bold; color: #ff2d78;">
                        Tuples <i class="fa-solid fa-caret-down" style="font-size: 0.8rem; margin-left: 5px;"></i>
                    </a>
                    <ul class="tuple-sub-items" style="display: none; list-style: none; padding-left: 15px;">
                        <li><a href="py_tuples.php" style="font-style: italic;">- Overview & Rules</a></li>
                        <li><a href="py_access_tuples.php">- Access Tuples</a></li>
                        <li><a href="py_update_tuples.php">- Update Tuples</a></li>
                        <li><a href="py_unpack_tuples.php">- Unpack Tuples</a></li>
                        <li><a href="py_loop_tuples.php">- Loop Tuples</a></li>
                    </ul>
                </li>

                <li><a href="py_set.php">Set</a></li>
            </ul>
        </li>

        <li class="side-items dropdown">
            <h3 class="">Control Statements</h3>
            <ul class="dropdown-menu">
                <li><a href="py_ifelse.php">If Else</a></li>
                <li><a href="py_elif.php">ELif</a></li>
                <li><a href="py_nestedif.php">Nested If</a></li>
            </ul>
        </li>
    </ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. List Sub-Menu Toggle
    const listToggle = document.querySelector('.list-toggle-btn');
    const listSubMenu = document.querySelector('.list-sub-items');
    if (listToggle && listSubMenu) {
        listToggle.addEventListener('click', function(e) {
            e.preventDefault(); e.stopPropagation();
            listSubMenu.style.display = (listSubMenu.style.display === "none") ? "block" : "none";
        });
    }

    // 2. Tuple Sub-Menu Toggle
    const tupleToggle = document.querySelector('.tuple-toggle-btn');
    const tupleSubMenu = document.querySelector('.tuple-sub-items');
    if (tupleToggle && tupleSubMenu) {
        tupleToggle.addEventListener('click', function(e) {
            e.preventDefault(); e.stopPropagation();
            tupleSubMenu.style.display = (tupleSubMenu.style.display === "none") ? "block" : "none";
        });
    }

    // 3. Auto-keep active sub-menu open based on current file URL
    const currentUrl = window.location.pathname.split("/").pop();
    
    if (listSubMenu) {
        listSubMenu.querySelectorAll('a').forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                listSubMenu.style.display = "block";
                link.style.color = "#00ffe7";
                link.style.fontWeight = "bold";
            }
        });
    }

    if (tupleSubMenu) {
        tupleSubMenu.querySelectorAll('a').forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                tupleSubMenu.style.display = "block";
                link.style.color = "#00ffe7";
                link.style.fontWeight = "bold";
            }
        });
    }
});
</script>