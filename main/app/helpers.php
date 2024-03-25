<?php

use Illuminate\Support\Facades\File;

function fileDelete($destination) {
    if (File::exists($destination)) {
        File::delete($destination);
    }
}
