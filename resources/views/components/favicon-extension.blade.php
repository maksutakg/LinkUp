<?php

if (!function_exists('localIcon')) {
    function localIcon($id)
    {
        $directory = base_path("assets/favicon/icons");
        $files = preloadDirectoryFiles($directory, 'favicon_icons_files');
        $pathinfo = "error.error";
        foreach ($files as $file) {
            if (strpos($file, $id . '.') !== false) {
                $pathinfo = $id . "." . pathinfo($file, PATHINFO_EXTENSION);
            }
        }
        return $pathinfo;
    }
}
  
?>
