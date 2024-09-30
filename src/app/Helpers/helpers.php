<?php

if (!function_exists('remove_phone_mask')) {
    /**
     * Форматирует номер телефона с маской.
     *
     * @param  string|null  $phone
     * @return string
     */
    function remove_phone_mask(?string $phone): ?string
    {
        $REPLACEABLE_SYMBOL = 'X';
        $MASK_PLACEHOLDER = '_';
        $format = '+';

        if ($phone === null) {
            return null;
        }

        // Masked phone placeholder
        $maskedPhone = str_replace($REPLACEABLE_SYMBOL, $MASK_PLACEHOLDER, $format);

        // First try remove masked empty string
        if (str_replace($maskedPhone, '', $phone) === '') {
            return null;
        }

        return preg_replace('/[^+\d]/', '', $phone);
    }
}