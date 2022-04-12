<?php

class SpreadsheetEditor {

	public static function onBeforePageDisplay( $out ) {

		$out->addModules( 'ext.SpreadsheetEditor' );

		return true;

	}

}
