<?php
declare(strict_types=1);

function create_link(string $action, ?string $label): string
{
	$label = $label ?? 'Default';
	return "<a href='$action'>$label</a>";
}

print create_link('delete.php',NULL);