<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit606e3a05d667c73884d64babcc4f67c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sendinblue\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sendinblue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Sendinblue' => __DIR__ . '/../..' . '/sendinblue.php',
        'SendinblueCallbackModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/callback.php',
        'SendinblueTabController' => __DIR__ . '/../..' . '/controllers/admin/SendinblueTabController.php',
        'Sendinblue\\Factories\\EventDataFactory' => __DIR__ . '/../..' . '/factories/EventDataFactory.php',
        'Sendinblue\\Factories\\HooksFactory' => __DIR__ . '/../..' . '/factories/HooksFactory.php',
        'Sendinblue\\Factories\\ProductFactory' => __DIR__ . '/../..' . '/factories/ProductFactory.php',
        'Sendinblue\\Factories\\ProductVariantsFactory' => __DIR__ . '/../..' . '/factories/ProductVariantsFactory.php',
        'Sendinblue\\Hooks\\AbstractHook' => __DIR__ . '/../..' . '/hooks/AbstractHook.php',
        'Sendinblue\\Hooks\\ActionCartSaveHook' => __DIR__ . '/../..' . '/hooks/ActionCartSaveHook.php',
        'Sendinblue\\Hooks\\ActionCustomerAccountAddHook' => __DIR__ . '/../..' . '/hooks/ActionCustomerAccountAddHook.php',
        'Sendinblue\\Hooks\\ActionCustomerAccountUpdateHook' => __DIR__ . '/../..' . '/hooks/ActionCustomerAccountUpdateHook.php',
        'Sendinblue\\Hooks\\ActionEmailConfigurationSaveHook' => __DIR__ . '/../..' . '/hooks/ActionEmailConfigurationSaveHook.php',
        'Sendinblue\\Hooks\\ActionNewsletterRegistrationAfterHook' => __DIR__ . '/../..' . '/hooks/ActionNewsletterRegistrationAfterHook.php',
        'Sendinblue\\Hooks\\ActionObjectCustomerAddressUpdateHook' => __DIR__ . '/../..' . '/hooks/ActionObjectCustomerAddressUpdateHook.php',
        'Sendinblue\\Hooks\\ActionOrderStatusUpdateHook' => __DIR__ . '/../..' . '/hooks/ActionOrderStatusUpdateHook.php',
        'Sendinblue\\Hooks\\ActionWebPush' => __DIR__ . '/../..' . '/hooks/ActionWebPush.php',
        'Sendinblue\\Hooks\\OrderConfirmationHook' => __DIR__ . '/../..' . '/hooks/OrderConfirmationHook.php',
        'Sendinblue\\Models\\AbstractModel' => __DIR__ . '/../..' . '/models/AbstractModel.php',
        'Sendinblue\\Models\\AbstractOrderCompletionModel' => __DIR__ . '/../..' . '/models/AbstractOrderCompletionModel.php',
        'Sendinblue\\Models\\CartItem' => __DIR__ . '/../..' . '/models/CartItem.php',
        'Sendinblue\\Models\\CartProperties' => __DIR__ . '/../..' . '/models/CartProperties.php',
        'Sendinblue\\Models\\CustomerAddress' => __DIR__ . '/../..' . '/models/CustomerAddress.php',
        'Sendinblue\\Models\\EventdataData' => __DIR__ . '/../..' . '/models/EventdataData.php',
        'Sendinblue\\Models\\OrderMiscellaneous' => __DIR__ . '/../..' . '/models/OrderMiscellaneous.php',
        'Sendinblue\\Models\\OrderPayload' => __DIR__ . '/../..' . '/models/OrderPayload.php',
        'Sendinblue\\Models\\Product' => __DIR__ . '/../..' . '/models/Product.php',
        'Sendinblue\\Models\\ProductVariant' => __DIR__ . '/../..' . '/models/ProductVariant.php',
        'Sendinblue\\Models\\TransactionalOrderPayload' => __DIR__ . '/../..' . '/models/TransactionalOrderPayload.php',
        'Sendinblue\\Services\\ApiClientService' => __DIR__ . '/../..' . '/services/ApiClientService.php',
        'Sendinblue\\Services\\ConfigService' => __DIR__ . '/../..' . '/services/ConfigService.php',
        'Sendinblue\\Services\\CustomerService' => __DIR__ . '/../..' . '/services/CustomerService.php',
        'Sendinblue\\Services\\IntegrationClient' => __DIR__ . '/../..' . '/services/IntegrationClient.php',
        'Sendinblue\\Services\\NewsletterRecipientService' => __DIR__ . '/../..' . '/services/NewsletterRecipientService.php',
        'Sendinblue\\Services\\ProductService' => __DIR__ . '/../..' . '/services/ProductService.php',
        'Sendinblue\\Services\\SmsService' => __DIR__ . '/../..' . '/services/SmsService.php',
        'Sendinblue\\Services\\SubscriptionService' => __DIR__ . '/../..' . '/services/SubscriptionService.php',
        'Sendinblue\\Services\\WebserviceService' => __DIR__ . '/../..' . '/services/WebserviceService.php',
        'WebserviceSpecificManagementSendinblueAbstract' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinblueAbstract.php',
        'WebserviceSpecificManagementSendinblueconfig' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinblueconfig.php',
        'WebserviceSpecificManagementSendinbluecustomers' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinbluecustomers.php',
        'WebserviceSpecificManagementSendinbluedisconnect' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinbluedisconnect.php',
        'WebserviceSpecificManagementSendinblueinfo' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinblueinfo.php',
        'WebserviceSpecificManagementSendinbluenewsletterrecipients' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinbluenewsletterrecipients.php',
        'WebserviceSpecificManagementSendinblueproducts' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinblueproducts.php',
        'WebserviceSpecificManagementSendinbluesendtestmail' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinbluesendtestmail.php',
        'WebserviceSpecificManagementSendinbluetest' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinbluetest.php',
        'WebserviceSpecificManagementSendinblueunsubscribe' => __DIR__ . '/../..' . '/classes/webservice/WebserviceSpecificManagementSendinblueunsubscribe.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit606e3a05d667c73884d64babcc4f67c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit606e3a05d667c73884d64babcc4f67c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit606e3a05d667c73884d64babcc4f67c4::$classMap;

        }, null, ClassLoader::class);
    }
}
