<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu(\App\blogs::class)->label('Категории');
