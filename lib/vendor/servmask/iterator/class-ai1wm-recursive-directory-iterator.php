<?php

class Ai1wm_Recursive_Directory_Iterator extends RecursiveDirectoryIterator {

	public function __construct( $path ) {
		parent::__construct( $path );

		// Skip current and parent directory
		$this->skipdots();
	}

public function rewind(): void {
    parent::rewind();

    // Skip current and parent directory
    $this->skipdots();
}

public function getChildren(): RecursiveDirectoryIterator {
    return parent::getChildren();
}

public function hasChildren(bool $allowLinks = false): bool {
    return parent::hasChildren($allowLinks);
}
	protected function skipdots() {
		while ( $this->isDot() ) {
			parent::next();
		}
	}
}