<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Books4u Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <!-- <li><a href="">Users Online: <span class="usersonline"></span></a></li> -->
      <li><a href="../booksharing.php">HOME SITE</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/admin_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#books_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Books <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="books_dropdown" class="collapse">
                    <li>
                        <a href="books.php">View All Books</a>
                    </li>
                    <li>
                        <a href="review_books.php">Review Books</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="accessories.php"><i class="fa fa-fw fa-wrench"></i> Accessories </a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-dashboard"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="users.php">Review Users</a>
                    </li>
                    <!-- <li>
                        <a href="users.php?source=edit_user">Edit Users</a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a href="profile.php"><i class="fa fa-user"></i> Profile </a>
            </li>
            <li>
                <a href="add_admin.php"><i class="fa fa-fw fa-wrench"></i> Add New Admin </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
