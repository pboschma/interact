<?php
//database
require_once('classes/database/DatabaseConfig.php');
require_once('classes/database/Database.php');

//constants
require_once('assets/constants/Constants.php');

//chat

//base
require_once('classes/base/Base.php');
require_once('classes/base/controller/BaseController.php');
require_once('classes/base/validation/Sanitize.php');

//chat
require_once('classes/chat/Chat.php');
require_once('classes/chat/ChatConfig.php');
require_once('classes/chat/controller/ChatController.php');
require_once('classes/chat/service/ChatService.php');
require_once('classes/chat/mapper/ChatMapper.php');

//favourites

//login
require_once('classes/login/Login.php');
require_once('classes/login/LoginConfig.php');
require_once('classes/login/controller/LoginController.php');
require_once('classes/login/service/LoginService.php');
require_once('classes/login/mapper/LoginMapper.php');

//message
require_once('classes/message/Message.php');
require_once('classes/message/MessageConfig.php');
//require_once('classes/message/service/MessageController.php');
require_once('classes/message/service/MessageService.php');
require_once('classes/message/mapper/MessageMapper.php');

//message_highlighting
require_once('classes/message_highlighting/MessageHighlighting.php');
//require_once('classes/message_highlighting/MessageHighlightingConfig.php');
//require_once('classes/message_highlighting/controller/MessageHighlightingController.php');
//require_once('classes/message_highlighting/service/MessageHighlightingService.php');
//require_once('classes/message_highlighting/mapper/MessageHighlightingMapper.php');

//register
require_once('classes/register/Register.php');
require_once('classes/register/RegisterConfig.php');
require_once('classes/register/controller/RegisterController.php');
require_once('classes/register/service/RegisterService.php');
//require_once('classes/register/mapper/RegisterMapper.php');

//user
require_once('classes/user/User.php');
require_once('classes/user/UserConfig.php');
//require_once('classes/user/controller/UserController.php');
require_once('classes/user/service/UserService.php');
require_once('classes/user/mapper/UserMapper.php');

//user_profile
require_once('classes/user_profile/UserProfile.php');
require_once('classes/user_profile/UserProfileConfig.php');
require_once('classes/user_profile/controller/UserProfileController.php');
require_once('classes/user_profile/service/UserProfileService.php');
require_once('classes/user_profile/mapper/UserProfileMapper.php');

//user_search
require_once('classes/user_search/UserSearch.php');
require_once('classes/user_search/UserSearchConfig.php');
require_once('classes/user_search/controller/UserSearchController.php');
require_once('classes/user_search/service/UserSearchService.php');
//require_once('classes/user_search/mapper/UserSearchMapper.php');