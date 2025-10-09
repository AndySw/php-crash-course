<?php

function print_first_initial(string $character = 'M', string $spacer = '') : void {
    
    if($character != NULL && strlen($character) === 1) {

    }
    
    if($spacer != NULL && strlen($spacer) === 1) {
        print $spacer[0];
    }

}