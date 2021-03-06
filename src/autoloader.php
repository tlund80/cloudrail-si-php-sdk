<?php

$mapping = array(
    'CloudRail\autoloader' => __DIR__ . '/autoloader.php',
    'CloudRail\Error\AuthenticationError' => __DIR__ . '/Error/AuthenticationError.php',
    'CloudRail\Error\HttpError' => __DIR__ . '/Error/HttpError.php',
    'CloudRail\Error\IllegalArgumentError' => __DIR__ . '/Error/IllegalArgumentError.php',
    'CloudRail\Error\InternalError' => __DIR__ . '/Error/InternalError.php',
    'CloudRail\Error\NotFoundError' => __DIR__ . '/Error/NotFoundError.php',
    'CloudRail\Error\ServiceUnavailableError' => __DIR__ . '/Error/ServiceUnavailableError.php',
    'CloudRail\Error\UserError' => __DIR__ . '/Error/UserError.php',
    'CloudRail\Interfaces\AdvancedRequestSupporter' => __DIR__ . '/Interfaces/AdvancedRequestSupporter.php',
    'CloudRail\Interfaces\Authenticating' => __DIR__ . '/Interfaces/Authenticating.php',
    'CloudRail\Interfaces\BusinessCloudStorage' => __DIR__ . '/Interfaces/BusinessCloudStorage.php',
    'CloudRail\Interfaces\CloudStorage' => __DIR__ . '/Interfaces/CloudStorage.php',
    'CloudRail\Interfaces\Email' => __DIR__ . '/Interfaces/Email.php',
    'CloudRail\Interfaces\Messaging' => __DIR__ . '/Interfaces/Messaging.php',
    'CloudRail\Interfaces\Payment' => __DIR__ . '/Interfaces/Payment.php',
    'CloudRail\Interfaces\Persistable' => __DIR__ . '/Interfaces/Persistable.php',
    'CloudRail\Interfaces\PointsOfInterest' => __DIR__ . '/Interfaces/PointsOfInterest.php',
    'CloudRail\Interfaces\Profile' => __DIR__ . '/Interfaces/Profile.php',
    'CloudRail\Interfaces\SMS' => __DIR__ . '/Interfaces/SMS.php',
    'CloudRail\Interfaces\Social' => __DIR__ . '/Interfaces/Social.php',
    'CloudRail\Interfaces\Video' => __DIR__ . '/Interfaces/Video.php',
    'CloudRail\Service\AmazonS3' => __DIR__ . '/Service/AmazonS3.php',
    'CloudRail\Service\Backblaze' => __DIR__ . '/Service/Backblaze.php',
    'CloudRail\Service\Box' => __DIR__ . '/Service/Box.php',
    'CloudRail\Service\Dropbox' => __DIR__ . '/Service/Dropbox.php',
    'CloudRail\Service\Egnyte' => __DIR__ . '/Service/Egnyte.php',
    'CloudRail\Service\Facebook' => __DIR__ . '/Service/Facebook.php',
    'CloudRail\Service\FacebookMessenger' => __DIR__ . '/Service/FacebookMessenger.php',
    'CloudRail\Service\FacebookPage' => __DIR__ . '/Service/FacebookPage.php',
    'CloudRail\Service\Foursquare' => __DIR__ . '/Service/Foursquare.php',
    'CloudRail\Service\GitHub' => __DIR__ . '/Service/GitHub.php',
    'CloudRail\Service\GMail' => __DIR__ . '/Service/GMail.php',
    'CloudRail\Service\GoogleCloudPlatform' => __DIR__ . '/Service/GoogleCloudPlatform.php',
    'CloudRail\Service\GoogleDrive' => __DIR__ . '/Service/GoogleDrive.php',
    'CloudRail\Service\GooglePlaces' => __DIR__ . '/Service/GooglePlaces.php',
    'CloudRail\Service\GooglePlus' => __DIR__ . '/Service/GooglePlus.php',
    'CloudRail\Service\Heroku' => __DIR__ . '/Service/Heroku.php',
    'CloudRail\Service\Instagram' => __DIR__ . '/Service/Instagram.php',
    'CloudRail\Service\Line' => __DIR__ . '/Service/Line.php',
    'CloudRail\Service\LinkedIn' => __DIR__ . '/Service/LinkedIn.php',
    'CloudRail\Service\MailJet' => __DIR__ . '/Service/MailJet.php',
    'CloudRail\Service\Microsoft' => __DIR__ . '/Service/Microsoft.php',
    'CloudRail\Service\MicrosoftAzure' => __DIR__ . '/Service/MicrosoftAzure.php',
    'CloudRail\Service\MicrosoftLive' => __DIR__ . '/Service/MicrosoftLive.php',
    'CloudRail\Service\Nexmo' => __DIR__ . '/Service/Nexmo.php',
    'CloudRail\Service\OneDrive' => __DIR__ . '/Service/OneDrive.php',
    'CloudRail\Service\OneDriveBusiness' => __DIR__ . '/Service/OneDriveBusiness.php',
    'CloudRail\Service\PayPal' => __DIR__ . '/Service/PayPal.php',
    'CloudRail\Service\PCloud' => __DIR__ . '/Service/PCloud.php',
    'CloudRail\Service\ProductHunt' => __DIR__ . '/Service/ProductHunt.php',
    'CloudRail\Service\Rackspace' => __DIR__ . '/Service/Rackspace.php',
    'CloudRail\Service\SendGrid' => __DIR__ . '/Service/SendGrid.php',
    'CloudRail\Service\Slack' => __DIR__ . '/Service/Slack.php',
    'CloudRail\Service\SlackBot' => __DIR__ . '/Service/SlackBot.php',
    'CloudRail\Service\Stripe' => __DIR__ . '/Service/Stripe.php',
    'CloudRail\Service\Telegram' => __DIR__ . '/Service/Telegram.php',
    'CloudRail\Service\Twilio' => __DIR__ . '/Service/Twilio.php',
    'CloudRail\Service\Twitch' => __DIR__ . '/Service/Twitch.php',
    'CloudRail\Service\Twitter' => __DIR__ . '/Service/Twitter.php',
    'CloudRail\Service\Twizo' => __DIR__ . '/Service/Twizo.php',
    'CloudRail\Service\Viber' => __DIR__ . '/Service/Viber.php',
    'CloudRail\Service\Vimeo' => __DIR__ . '/Service/Vimeo.php',
    'CloudRail\Service\Yahoo' => __DIR__ . '/Service/Yahoo.php',
    'CloudRail\Service\Yelp' => __DIR__ . '/Service/Yelp.php',
    'CloudRail\Service\YouTube' => __DIR__ . '/Service/YouTube.php',
    'CloudRail\ServiceCode\Command\AwaitCodeRedirect' => __DIR__ . '/ServiceCode/Command/AwaitCodeRedirect.php',
    'CloudRail\ServiceCode\Command\CallFunc' => __DIR__ . '/ServiceCode/Command/CallFunc.php',
    'CloudRail\ServiceCode\Command\Commands' => __DIR__ . '/ServiceCode/Command/Commands.php',
    'CloudRail\ServiceCode\Command\Conditional' => __DIR__ . '/ServiceCode/Command/Conditional.php',
    'CloudRail\ServiceCode\Command\Create' => __DIR__ . '/ServiceCode/Command/Create.php',
    'CloudRail\ServiceCode\Command\crlist\DataToUint8' => __DIR__ . '/ServiceCode/Command/crlist/DataToUint8.php',
    'CloudRail\ServiceCode\Command\crlist\Sort' => __DIR__ . '/ServiceCode/Command/crlist/Sort.php',
    'CloudRail\ServiceCode\Command\crlist\Uint8ToBase64' => __DIR__ . '/ServiceCode/Command/crlist/Uint8ToBase64.php',
    'CloudRail\ServiceCode\Command\crlist\Uint8ToData' => __DIR__ . '/ServiceCode/Command/crlist/Uint8ToData.php',
    'CloudRail\ServiceCode\Command\crypt\Hash' => __DIR__ . '/ServiceCode/Command/crypt/Hash.php',
    'CloudRail\ServiceCode\Command\crypt\Hmac' => __DIR__ . '/ServiceCode/Command/crypt/Hmac.php',
    'CloudRail\ServiceCode\Command\crypt\Sign' => __DIR__ . '/ServiceCode/Command/crypt/Sign.php',
    'CloudRail\ServiceCode\Command\debug\Out' => __DIR__ . '/ServiceCode/Command/debug/Out.php',
    'CloudRail\ServiceCode\Command\Get' => __DIR__ . '/ServiceCode/Command/Get.php',
    'CloudRail\ServiceCode\Command\GetMimeType' => __DIR__ . '/ServiceCode/Command/GetMimeType.php',
    'CloudRail\ServiceCode\Command\http\RequestCall' => __DIR__ . '/ServiceCode/Command/http/RequestCall.php',
    'CloudRail\ServiceCode\Command\json\Parse' => __DIR__ . '/ServiceCode/Command/json/Parse.php',
    'CloudRail\ServiceCode\Command\json\Stringify' => __DIR__ . '/ServiceCode/Command/json/Stringify.php',
    'CloudRail\ServiceCode\Command\JumpRel' => __DIR__ . '/ServiceCode/Command/JumpRel.php',
    'CloudRail\ServiceCode\Command\math\Floor' => __DIR__ . '/ServiceCode/Command/math/Floor.php',
    'CloudRail\ServiceCode\Command\math\MathCombine' => __DIR__ . '/ServiceCode/Command/math/MathCombine.php',
    'CloudRail\ServiceCode\Command\object\GetKeyArray' => __DIR__ . '/ServiceCode/Command/object/GetKeyArray.php',
    'CloudRail\ServiceCode\Command\object\GetKeyValueArrays' => __DIR__ . '/ServiceCode/Command/object/GetKeyValueArrays.php',
    'CloudRail\ServiceCode\Command\Push' => __DIR__ . '/ServiceCode/Command/Push.php',
    'CloudRail\ServiceCode\Command\ReturnFunction' => __DIR__ . '/ServiceCode/Command/ReturnFunction.php',
    'CloudRail\ServiceCode\Command\Set' => __DIR__ . '/ServiceCode/Command/Set.php',
    'CloudRail\ServiceCode\Command\Size' => __DIR__ . '/ServiceCode/Command/Size.php',
    'CloudRail\ServiceCode\Command\StatsAdd' => __DIR__ . '/ServiceCode/Command/StatsAdd.php',
    'CloudRail\ServiceCode\Command\stream\DataToStream' => __DIR__ . '/ServiceCode/Command/stream/DataToStream.php',
    'CloudRail\ServiceCode\Command\stream\MakeJoinedStream' => __DIR__ . '/ServiceCode/Command/stream/MakeJoinedStream.php',
    'CloudRail\ServiceCode\Command\stream\MakeLimitedStream' => __DIR__ . '/ServiceCode/Command/stream/MakeLimitedStream.php',
    'CloudRail\ServiceCode\Command\stream\StreamToData' => __DIR__ . '/ServiceCode/Command/stream/StreamToData.php',
    'CloudRail\ServiceCode\Command\stream\StreamToString' => __DIR__ . '/ServiceCode/Command/stream/StreamToString.php',
    'CloudRail\ServiceCode\Command\stream\StringToStream' => __DIR__ . '/ServiceCode/Command/stream/StringToStream.php',
    'CloudRail\ServiceCode\Command\string\ChunkSplit' => __DIR__ . '/ServiceCode/Command/string/ChunkSplit.php',
    'CloudRail\ServiceCode\Command\string\Concat' => __DIR__ . '/ServiceCode/Command/string/Concat.php',
    'CloudRail\ServiceCode\Command\string\Format' => __DIR__ . '/ServiceCode/Command/string/Format.php',
    'CloudRail\ServiceCode\Command\string\IndexOf' => __DIR__ . '/ServiceCode/Command/string/IndexOf.php',
    'CloudRail\ServiceCode\Command\string\LastIndexOf' => __DIR__ . '/ServiceCode/Command/string/LastIndexOf.php',
    'CloudRail\ServiceCode\Command\string\Split' => __DIR__ . '/ServiceCode/Command/string/Split.php',
    'CloudRail\ServiceCode\Command\string\StringTransform' => __DIR__ . '/ServiceCode/Command/string/StringTransform.php',
    'CloudRail\ServiceCode\Command\string\Substr' => __DIR__ . '/ServiceCode/Command/string/Substr.php',
    'CloudRail\ServiceCode\Command\string\Substring' => __DIR__ . '/ServiceCode/Command/string/Substring.php',
    'CloudRail\ServiceCode\Command\string\URLEncode' => __DIR__ . '/ServiceCode/Command/string/URLEncode.php',
    'CloudRail\ServiceCode\Command\ThrowError' => __DIR__ . '/ServiceCode/Command/ThrowError.php',
    'CloudRail\ServiceCode\Command\xml\XMLParse' => __DIR__ . '/ServiceCode/Command/xml/XMLParse.php',
    'CloudRail\ServiceCode\Command\xml\XMLStringify' => __DIR__ . '/ServiceCode/Command/xml/XMLStringify.php',
    'CloudRail\ServiceCode\Command' => __DIR__ . '/ServiceCode/Command.php',
    'CloudRail\ServiceCode\Helper' => __DIR__ . '/ServiceCode/Helper.php',
    'CloudRail\ServiceCode\Interpreter' => __DIR__ . '/ServiceCode/Interpreter.php',
    'CloudRail\ServiceCode\Sandbox' => __DIR__ . '/ServiceCode/Sandbox.php',
    'CloudRail\ServiceCode\VarAddress' => __DIR__ . '/ServiceCode/VarAddress.php',
    'CloudRail\Settings' => __DIR__ . '/Settings.php',
    'CloudRail\Type\Address' => __DIR__ . '/Type/Address.php',
    'CloudRail\Type\AdvancedRequestResponse' => __DIR__ . '/Type/AdvancedRequestResponse.php',
    'CloudRail\Type\AdvancedRequestSpecification' => __DIR__ . '/Type/AdvancedRequestSpecification.php',
    'CloudRail\Type\Attachment' => __DIR__ . '/Type/Attachment.php',
    'CloudRail\Type\Bucket' => __DIR__ . '/Type/Bucket.php',
    'CloudRail\Type\BusinessFileMetaData' => __DIR__ . '/Type/BusinessFileMetaData.php',
    'CloudRail\Type\ChannelMetaData' => __DIR__ . '/Type/ChannelMetaData.php',
    'CloudRail\Type\Charge' => __DIR__ . '/Type/Charge.php',
    'CloudRail\Type\CloudMetaData' => __DIR__ . '/Type/CloudMetaData.php',
    'CloudRail\Type\CloudRailDate' => __DIR__ . '/Type/CloudRailDate.php',
    'CloudRail\Type\CloudRailError' => __DIR__ . '/Type/CloudRailError.php',
    'CloudRail\Type\Comparable' => __DIR__ . '/Type/Comparable.php',
    'CloudRail\Type\Comparator' => __DIR__ . '/Type/Comparator.php',
    'CloudRail\Type\CreditCard' => __DIR__ . '/Type/CreditCard.php',
    'CloudRail\Type\DateOfBirth' => __DIR__ . '/Type/DateOfBirth.php',
    'CloudRail\Type\ErrorType' => __DIR__ . '/Type/ErrorType.php',
    'CloudRail\Type\ImageMetaData' => __DIR__ . '/Type/ImageMetaData.php',
    'CloudRail\Type\Location' => __DIR__ . '/Type/Location.php',
    'CloudRail\Type\Message' => __DIR__ . '/Type/Message.php',
    'CloudRail\Type\MessageButton' => __DIR__ . '/Type/MessageButton.php',
    'CloudRail\Type\MessageItem' => __DIR__ . '/Type/MessageItem.php',
    'CloudRail\Type\MessagingAttachment' => __DIR__ . '/Type/MessagingAttachment.php',
    'CloudRail\Type\POI' => __DIR__ . '/Type/POI.php',
    'CloudRail\Type\Refund' => __DIR__ . '/Type/Refund.php',
    'CloudRail\Type\SandboxObject' => __DIR__ . '/Type/SandboxObject.php',
    'CloudRail\Type\SpaceAllocation' => __DIR__ . '/Type/SpaceAllocation.php',
    'CloudRail\Type\Subscription' => __DIR__ . '/Type/Subscription.php',
    'CloudRail\Type\SubscriptionPlan' => __DIR__ . '/Type/SubscriptionPlan.php',
    'CloudRail\Type\Types' => __DIR__ . '/Type/Types.php',
    'CloudRail\Type\VideoMetaData' => __DIR__ . '/Type/VideoMetaData.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

