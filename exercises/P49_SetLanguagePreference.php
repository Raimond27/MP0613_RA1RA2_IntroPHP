<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        $defaultLanguage = 'en';
        $selectedLanguage = $defaultLanguage; 

        if (isset($_GET['lang'])) {
            $requestedLang = $_GET['lang'];

            if (in_array($requestedLang, $this->allowedLanguages)) {
                $selectedLanguage = $requestedLang;
            }
        }

        $_SESSION['lang'] = $selectedLanguage;

        echo "Language set to " . $selectedLanguage;
    }
}