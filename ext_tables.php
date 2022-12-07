<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_staticcitiesde_domain_model_record', 'EXT:static_cities_de/Resources/Private/Language/locallang_csh_tx_staticcitiesde_domain_model_record.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_staticcitiesde_domain_model_record');
})();
