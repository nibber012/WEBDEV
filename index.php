<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/navbar-sidebars.css">
    <link rel="stylesheet" href="/CSS/login-interface.css">
    <title>Homepage</title>
    <!-- FontAwesome Link -->
    <script src="https://kit.fontawesome.com/75f6239104.js" crossorigin="anonymous"></script>
    <!-- FontAwesome Link^ -->
</head>
<body>
    <header>
        <div class="navbar-container">
            <div class="left-contents">
                <span class="menu-bar" onclick="toggleSidebar('menu-sidebar')"><i class="fa-solid fa-bars"></i></span>
                <span href="#" class="logo">Data Breach</span>
            </div>

            <div class="right-contents">
                <span class="search" onclick="toggleSidebar('search-sidebar')">Search</span>
                <span class="cart" onclick="toggleSidebar('cart-sidebar')">Cart</span>
            </div>
        </div>
    </header>

    <section>
        Try lang (Note: Una kong nilagay pagtapos panoorin yung tutorial)
        Second (Note: Pangalawang lagay para macheck kung nareregister yung changes sa Github)
        Another: Same idea
    </section>

    <!-- Menu Sidebar -->
    <div class="sidebar menu-sidebar" id="menu-sidebar">
        <!-- Menu Sidebar content goes here -->
         <div class="ssidebar-top">
            <div class="sidebar-top">
                <span class="menu-bar" onclick="toggleSidebar('menu-sidebar')"><i class="fa-solid fa-bars"></i></span>
                <span class="logo" onclick="toggleSidebar('menu-sidebar')">Data Breach</span>
            </div>
            <div class="sidebar-mid">
            <ul>
                <!-- Menu Sidebar links go here -->
                <li>
                    <i class="mid-icon fa-solid fa-user"></i>
                    <span>Profile</span>
                </li>
                <li>
                    <i class="mid-icon fa-solid fa-bell"></i>
                    <span>Notification</span>
                </li>
                <li>
                    <i class="mid-icon fa-solid fa-envelope"></i>
                    <span>Inbox</span>
                </li>
                <li>
                    <i class="mid-icon fa-solid fa-tags"></i>
                    <span>Your Listings</span>
                </li>
                <li>
                    <i class="mid-icon fa-solid fa-bookmark"></i>
                    <span>Saved products</span>
                </li>
                <li>
                    <i class="mid-icon fa-solid fa-user-check"></i>
                    <span>Following</span>
                </li>
                <!-- Add more links as needed -->
            </ul>
            </div>
        </div>
        <div class="sidebar-bot">
            <ul>
                <li>
                    <span class="logout">Log out</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </li>
            </ul>
        </div>
    </div>

    <!-- Search Sidebar -->
    <div class="sidebar search-sidebar" id="search-sidebar">
        <!-- Search Sidebar content goes here -->
        <span class="close-btn" onclick="closeSidebar('search-sidebar')">&times;</span>
        <ul>
            <!-- Search Sidebar links go here -->
            <li>Supposed search bar</li>
            <li>your recent searches</li>
            <li>your recent searches</li>
            <li>your recent searches</li>
            <!-- Add more links as needed -->
        </ul>
    </div>

    <!-- Cart Sidebar -->
    <div class="sidebar cart-sidebar" id="cart-sidebar">
        <!-- Cart Sidebar content goes here -->
        <span class="close-btn" onclick="closeSidebar('cart-sidebar')">&times;</span>
        <ul>
            <!-- Cart Sidebar links go here -->
            <li>Your shopping cart</li>
            <li>List of items</li>
            <li>List of items</li>
            <li>List of items</li>
            <!-- Add more links as needed -->
        </ul>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay" onclick="closeAllSidebars()"></div>

    <?php
    // Include the login.php
    include('HTML/login.php');
    ?>

    <script src="/SCRIPT/sidebars.js"></script>
    <script src="/SCRIPT/login.js"></script>
</body>
</html>
