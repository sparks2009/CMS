<!-- # footer.inc.php  -->
    <div class="footerBox">
        <footer class="threeColumns">
            <article>
                <h1>Navigation</h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
						<li><a href="archive.php">Archives</a></li> 
						<!-- <li><a href="#">Contact</a></li> -->
						<li><?php if ($user) { echo '<a href="logout.php">Logout</a>'; } else { echo '<a href="login.php">Login</a>'; } ?></li>
						<li><?php if ($user && $user->canCreatePage()) echo '<li><a href="add_page.php">Add a New Page</a></li>'; ?></li>
						<!-- <li><a href="#">Register</a></li> -->
                    </ul>
                </nav>
            </article>
            <article>
                
                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
                <!-- <p><a href="#">read more here..</a></p> -->
				<?php if ($user) {echo '<p>You are logged in as: </p>' . $user->getUserType();} else { echo '<p> You are not logged in</p>';} ?>
            </article>
            <article>
                <h1>Other Stuff</h1>
                <ul>
                    <?php if ($user && $user->canCreatePage()) echo '<li><a href="add_page.php">Add a New Page</a></li>'; ?>
                    <li><a href="#">This</a></li>
                    <li><a href="#">That</a></li>
                    <li><a href="#">Foo</a></li>
                    <li><a href="#">Bar</a></li>
                </ul>
            </article>            
        </footer>
    </div>
</body>
</html>