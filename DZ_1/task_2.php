<?php

const DRAWINGS = 80;
const MARKERS = 23;
const PENCILS = 40;

$paints = DRAWINGS - (MARKERS + PENCILS);
print ($paints . ' - столько рисунков выполнено красками');

