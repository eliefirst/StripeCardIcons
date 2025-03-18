<?php namespace Elie\StripeCardIcons\Plugin; use Magento\Payment\Model\CcConfigProvider; class CcConfigProviderPlugin {
    /**
     * Modifie les icônes des cartes bancaires pour Stripe.
     *
     * @param CcConfigProvider $subject
     * @param array $icons
     * @return array
     */
    public function afterGetIcons(CcConfigProvider $subject, array $icons)
    {
        // Définition des nouvelles icônes pour Stripe
        $customIcons = [
            'visa' => 'Elie_StripeCardIcons::images/visa.svg',
            'mastercard' => 'Elie_StripeCardIcons::images/mastercard.svg',
            'amex' => 'Elie_StripeCardIcons::images/amex.svg',
            'discover' => 'Elie_StripeCardIcons::images/discover.svg',
            'diners' => 'Elie_StripeCardIcons::images/diners.svg',
            'jcb' => 'Elie_StripeCardIcons::images/jcb.svg',
            'unionpay' => 'Elie_StripeCardIcons::images/unionpay.svg',
            'cartes_bancaires' => 'Elie_StripeCardIcons::images/cartes_bancaires.svg',
        ];
        // Remplacement des icônes existantes si elles sont dans notre liste
        foreach ($customIcons as $code => $iconPath) {
            if (isset($icons[$code])) {
                $icons[$code]['url'] = $iconPath;
            }
        }
        return $icons;
    }
}
