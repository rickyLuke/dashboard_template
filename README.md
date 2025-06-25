# Dashboard Template
A single-page dashboard that loads content dynamically without page reloads.

## Quick Start

1. **Place these files in your PHP server root (e.g., XAMPP/htdocs/)**:
   - `index.php`       (Main dashboard)
   - `scripts/` folder   (Script files for js logic)
   - `scripts/style.js` (Application styling and user experience)
   - `features/` folder (All your pages go here)
   - `features/index.php` (Application layout)
   - `essentials/` folder (Bears all essential files for the application to run smoothly)
   - `essentials/init.php`        (Main file for php application logic)
   - `essentials/sidebar.php`     (Auto-generated navigation) 
   - `css/` folder (Application styling and layout)

2. **Add all the pages to use in the application in (features/) files must end with .php**

3. **Edit `init.php`** 
   - $loggedin emulates whether a user is signed in or not
   - If set to true, you gain access to the applicatio
   - If set to false, you get to the login page
   - That can be cnahged to match your authorization policy accordingly

   - To add sidebar links:
   ```php
   <?php
   $features = [
       'Dashboard'      => 'dashboard.php',
       'Analytics' => 'analytics.php',
       'Projects'  => 'projects.php',
       // Add more like this:
       'Messages'  => 'messages.php'
   ];
   ?>
   ```
