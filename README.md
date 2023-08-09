# Dev Task for adchitects

This project based on design https://app.clickup.com/t/862k736bd, given as a recrutation task. It's only a simple demo, not fully functioning web page.


## Installing and setup

1. Put files in `themes/` directory in your WordPress files.
2. Install dependencies two commands:
    ```
    npm install
    composer update
    ```
3. Build project itself with command:
    ```
    npm run buildprod
    ```
4. Enable theme in WordPress settings.
5. Create "Homepage" page and set it as Homepage in WP settings.
6. Add text for top notification bar in Settings -> Global Custom Fields.
7. Done


## Running project via BrowseSync

There is configured BrowseSync in webpack config file, you need only change proxy and port settings and then run it with command:
```
npm run watch
```
Be wary, as sometimes JS doesn't load properly in this mode.


## Extra notes

WordPress top bar was moved to the bottom of the page, to not obstruct top notification bar. Header menu should load via `krove_menu` location, but in case it doesn't, you can set it up manually in Main menu location in standard location of WPs menus.
