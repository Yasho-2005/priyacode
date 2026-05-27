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
                        <li><a href="py_access_list.php">- Access List Items</a></li>
                        <li><a href="py_change_list.php">- Change List Items</a></li>
                        <li><a href="py_add_list.php">- Add List Items</a></li>
                        <li><a href="py_remove_list.php">- Remove List Items</a></li>
                        <li><a href="py_loop_list.php">- Loop Lists</a></li>
                        <li><a href="py_list_comprehension.php">- List Comprehension</a></li>
                    </ul>
                </li>
                <li><a href="py_tuples.php">Tuples</a></li>
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
    const listToggle = document.querySelector('.list-toggle-btn');
    const subMenu = document.querySelector('.list-sub-items');

    if (listToggle && subMenu) {
        listToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // Prevents closing the parent "Collections" dropdown
            
            // Toggle visibility using inline styles smoothly
            if (subMenu.style.display === "none") {
                subMenu.style.display = "block";
            } else {
                subMenu.style.display = "none";
            }
        });
    }

    // Auto-keep open if the user is visiting one of the list pages
    const currentUrl = window.location.pathname.split("/").pop();
    const subLinks = subMenu.querySelectorAll('a');
    
    subLinks.forEach(link => {
        if (link.getAttribute('href') === currentUrl) {
            subMenu.style.display = "block"; // Keep the dropdown open
            link.style.color = "#00ffe7"; // Give current page link a clean highlight
            link.style.fontWeight = "bold";
        }
    });
});
</script>