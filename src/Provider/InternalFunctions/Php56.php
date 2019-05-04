<?php

namespace Potherca\Scanner\Provider\InternalFunctions;

use Potherca\Scanner\Provider\ProviderInterface;

class Php56 implements ProviderInterface
{
    /**
     * @return array
     */
    final public function provide()
    {
        return [
            'zend_version',
            'func_num_args',
            'func_get_arg',
            'func_get_args',
            'strlen',
            'strcmp',
            'strncmp',
            'strcasecmp',
            'strncasecmp',
            'each',
            'error_reporting',
            'define',
            'defined',
            'get_class',
            'get_called_class',
            'get_parent_class',
            'method_exists',
            'property_exists',
            'class_exists',
            'interface_exists',
            'trait_exists',
            'function_exists',
            'class_alias',
            'get_included_files',
            'get_required_files',
            'is_subclass_of',
            'is_a',
            'get_class_vars',
            'get_object_vars',
            'get_class_methods',
            'trigger_error',
            'user_error',
            'set_error_handler',
            'restore_error_handler',
            'set_exception_handler',
            'restore_exception_handler',
            'get_declared_classes',
            'get_declared_traits',
            'get_declared_interfaces',
            'get_defined_functions',
            'get_defined_vars',
            'create_function',
            'get_resource_type',
            'get_loaded_extensions',
            'extension_loaded',
            'get_extension_funcs',
            'get_defined_constants',
            'debug_backtrace',
            'debug_print_backtrace',
            'gc_collect_cycles',
            'gc_enabled',
            'gc_enable',
            'gc_disable',
            'strtotime',
            'date',
            'idate',
            'gmdate',
            'mktime',
            'gmmktime',
            'checkdate',
            'strftime',
            'gmstrftime',
            'time',
            'localtime',
            'getdate',
            'date_create',
            'date_create_immutable',
            'date_create_from_format',
            'date_create_immutable_from_format',
            'date_parse',
            'date_parse_from_format',
            'date_get_last_errors',
            'date_format',
            'date_modify',
            'date_add',
            'date_sub',
            'date_timezone_get',
            'date_timezone_set',
            'date_offset_get',
            'date_diff',
            'date_time_set',
            'date_date_set',
            'date_isodate_set',
            'date_timestamp_set',
            'date_timestamp_get',
            'timezone_open',
            'timezone_name_get',
            'timezone_name_from_abbr',
            'timezone_offset_get',
            'timezone_transitions_get',
            'timezone_location_get',
            'timezone_identifiers_list',
            'timezone_abbreviations_list',
            'timezone_version_get',
            'date_interval_create_from_date_string',
            'date_interval_format',
            'date_default_timezone_set',
            'date_default_timezone_get',
            'date_sunrise',
            'date_sunset',
            'date_sun_info',
            'ereg',
            'ereg_replace',
            'eregi',
            'eregi_replace',
            'split',
            'spliti',
            'sql_regcase',
            'libxml_set_streams_context',
            'libxml_use_internal_errors',
            'libxml_get_last_error',
            'libxml_clear_errors',
            'libxml_get_errors',
            'libxml_disable_entity_loader',
            'libxml_set_external_entity_loader',
            'openssl_get_cert_locations',
            'openssl_spki_new',
            'openssl_spki_verify',
            'openssl_spki_export',
            'openssl_spki_export_challenge',
            'openssl_pkey_free',
            'openssl_pkey_new',
            'openssl_pkey_export',
            'openssl_pkey_export_to_file',
            'openssl_pkey_get_private',
            'openssl_pkey_get_public',
            'openssl_pkey_get_details',
            'openssl_free_key',
            'openssl_get_privatekey',
            'openssl_get_publickey',
            'openssl_x509_read',
            'openssl_x509_free',
            'openssl_x509_parse',
            'openssl_x509_checkpurpose',
            'openssl_x509_check_private_key',
            'openssl_x509_export',
            'openssl_x509_fingerprint',
            'openssl_x509_export_to_file',
            'openssl_pkcs12_export',
            'openssl_pkcs12_export_to_file',
            'openssl_pkcs12_read',
            'openssl_csr_new',
            'openssl_csr_export',
            'openssl_csr_export_to_file',
            'openssl_csr_sign',
            'openssl_csr_get_subject',
            'openssl_csr_get_public_key',
            'openssl_digest',
            'openssl_encrypt',
            'openssl_decrypt',
            'openssl_cipher_iv_length',
            'openssl_sign',
            'openssl_verify',
            'openssl_seal',
            'openssl_open',
            'openssl_pbkdf2',
            'openssl_pkcs7_verify',
            'openssl_pkcs7_decrypt',
            'openssl_pkcs7_sign',
            'openssl_pkcs7_encrypt',
            'openssl_private_encrypt',
            'openssl_private_decrypt',
            'openssl_public_encrypt',
            'openssl_public_decrypt',
            'openssl_get_md_methods',
            'openssl_get_cipher_methods',
            'openssl_dh_compute_key',
            'openssl_random_pseudo_bytes',
            'openssl_error_string',
            'preg_match',
            'preg_match_all',
            'preg_replace',
            'preg_replace_callback',
            'preg_filter',
            'preg_split',
            'preg_quote',
            'preg_grep',
            'preg_last_error',
            'readgzfile',
            'gzrewind',
            'gzclose',
            'gzeof',
            'gzgetc',
            'gzgets',
            'gzgetss',
            'gzread',
            'gzopen',
            'gzpassthru',
            'gzseek',
            'gztell',
            'gzwrite',
            'gzputs',
            'gzfile',
            'gzcompress',
            'gzuncompress',
            'gzdeflate',
            'gzinflate',
            'gzencode',
            'gzdecode',
            'zlib_encode',
            'zlib_decode',
            'zlib_get_coding_type',
            'ob_gzhandler',
            'bcadd',
            'bcsub',
            'bcmul',
            'bcdiv',
            'bcmod',
            'bcpow',
            'bcsqrt',
            'bcscale',
            'bccomp',
            'bcpowmod',
            'bzopen',
            'bzread',
            'bzwrite',
            'bzflush',
            'bzclose',
            'bzerrno',
            'bzerrstr',
            'bzerror',
            'bzcompress',
            'bzdecompress',
            'jdtogregorian',
            'gregoriantojd',
            'jdtojulian',
            'juliantojd',
            'jdtojewish',
            'jewishtojd',
            'jdtofrench',
            'frenchtojd',
            'jddayofweek',
            'jdmonthname',
            'easter_date',
            'easter_days',
            'unixtojd',
            'jdtounix',
            'cal_to_jd',
            'cal_from_jd',
            'cal_days_in_month',
            'cal_info',
            'ctype_alnum',
            'ctype_alpha',
            'ctype_cntrl',
            'ctype_digit',
            'ctype_lower',
            'ctype_graph',
            'ctype_print',
            'ctype_punct',
            'ctype_space',
            'ctype_upper',
            'ctype_xdigit',
            'dom_import_simplexml',
            'finfo_open',
            'finfo_close',
            'finfo_set_flags',
            'finfo_file',
            'finfo_buffer',
            'mime_content_type',
            'filter_input',
            'filter_var',
            'filter_input_array',
            'filter_var_array',
            'filter_list',
            'filter_has_var',
            'filter_id',
            'hash',
            'hash_file',
            'hash_hmac',
            'hash_hmac_file',
            'hash_init',
            'hash_update',
            'hash_update_stream',
            'hash_update_file',
            'hash_final',
            'hash_copy',
            'hash_algos',
            'hash_pbkdf2',
            'hash_equals',
            'mhash_keygen_s2k',
            'mhash_get_block_size',
            'mhash_get_hash_name',
            'mhash_count',
            'mhash',
            'json_encode',
            'json_decode',
            'json_last_error',
            'json_last_error_msg',
            'mb_convert_case',
            'mb_strtoupper',
            'mb_strtolower',
            'mb_language',
            'mb_internal_encoding',
            'mb_http_input',
            'mb_http_output',
            'mb_detect_order',
            'mb_substitute_character',
            'mb_parse_str',
            'mb_output_handler',
            'mb_preferred_mime_name',
            'mb_strlen',
            'mb_strpos',
            'mb_strrpos',
            'mb_stripos',
            'mb_strripos',
            'mb_strstr',
            'mb_strrchr',
            'mb_stristr',
            'mb_strrichr',
            'mb_substr_count',
            'mb_substr',
            'mb_strcut',
            'mb_strwidth',
            'mb_strimwidth',
            'mb_convert_encoding',
            'mb_detect_encoding',
            'mb_list_encodings',
            'mb_encoding_aliases',
            'mb_convert_kana',
            'mb_encode_mimeheader',
            'mb_decode_mimeheader',
            'mb_convert_variables',
            'mb_encode_numericentity',
            'mb_decode_numericentity',
            'mb_send_mail',
            'mb_get_info',
            'mb_check_encoding',
            'mb_regex_encoding',
            'mb_regex_set_options',
            'mb_ereg',
            'mb_eregi',
            'mb_ereg_replace',
            'mb_eregi_replace',
            'mb_ereg_replace_callback',
            'mb_split',
            'mb_ereg_match',
            'mb_ereg_search',
            'mb_ereg_search_pos',
            'mb_ereg_search_regs',
            'mb_ereg_search_init',
            'mb_ereg_search_getregs',
            'mb_ereg_search_getpos',
            'mb_ereg_search_setpos',
            'mbregex_encoding',
            'mbereg',
            'mberegi',
            'mbereg_replace',
            'mberegi_replace',
            'mbsplit',
            'mbereg_match',
            'mbereg_search',
            'mbereg_search_pos',
            'mbereg_search_regs',
            'mbereg_search_init',
            'mbereg_search_getregs',
            'mbereg_search_getpos',
            'mbereg_search_setpos',
            'mcrypt_ecb',
            'mcrypt_cbc',
            'mcrypt_cfb',
            'mcrypt_ofb',
            'mcrypt_get_key_size',
            'mcrypt_get_block_size',
            'mcrypt_get_cipher_name',
            'mcrypt_create_iv',
            'mcrypt_list_algorithms',
            'mcrypt_list_modes',
            'mcrypt_get_iv_size',
            'mcrypt_encrypt',
            'mcrypt_decrypt',
            'mcrypt_module_open',
            'mcrypt_generic_init',
            'mcrypt_generic',
            'mdecrypt_generic',
            'mcrypt_generic_end',
            'mcrypt_generic_deinit',
            'mcrypt_enc_self_test',
            'mcrypt_enc_is_block_algorithm_mode',
            'mcrypt_enc_is_block_algorithm',
            'mcrypt_enc_is_block_mode',
            'mcrypt_enc_get_block_size',
            'mcrypt_enc_get_key_size',
            'mcrypt_enc_get_supported_key_sizes',
            'mcrypt_enc_get_iv_size',
            'mcrypt_enc_get_algorithms_name',
            'mcrypt_enc_get_modes_name',
            'mcrypt_module_self_test',
            'mcrypt_module_is_block_algorithm_mode',
            'mcrypt_module_is_block_algorithm',
            'mcrypt_module_is_block_mode',
            'mcrypt_module_get_algo_block_size',
            'mcrypt_module_get_algo_key_size',
            'mcrypt_module_get_supported_key_sizes',
            'mcrypt_module_close',
            'pcntl_fork',
            'pcntl_waitpid',
            'pcntl_wait',
            'pcntl_signal',
            'pcntl_signal_dispatch',
            'pcntl_wifexited',
            'pcntl_wifstopped',
            'pcntl_wifsignaled',
            'pcntl_wexitstatus',
            'pcntl_wtermsig',
            'pcntl_wstopsig',
            'pcntl_exec',
            'pcntl_alarm',
            'pcntl_get_last_error',
            'pcntl_errno',
            'pcntl_strerror',
            'pcntl_getpriority',
            'pcntl_setpriority',
            'pcntl_sigprocmask',
            'pcntl_sigwaitinfo',
            'pcntl_sigtimedwait',
            'pdo_drivers',
            'posix_kill',
            'posix_getpid',
            'posix_getppid',
            'posix_getuid',
            'posix_setuid',
            'posix_geteuid',
            'posix_seteuid',
            'posix_getgid',
            'posix_setgid',
            'posix_getegid',
            'posix_setegid',
            'posix_getgroups',
            'posix_getlogin',
            'posix_getpgrp',
            'posix_setsid',
            'posix_setpgid',
            'posix_getpgid',
            'posix_getsid',
            'posix_uname',
            'posix_times',
            'posix_ctermid',
            'posix_ttyname',
            'posix_isatty',
            'posix_getcwd',
            'posix_mkfifo',
            'posix_mknod',
            'posix_access',
            'posix_getgrnam',
            'posix_getgrgid',
            'posix_getpwnam',
            'posix_getpwuid',
            'posix_getrlimit',
            'posix_get_last_error',
            'posix_errno',
            'posix_strerror',
            'posix_initgroups',
            'readline',
            'readline_info',
            'readline_add_history',
            'readline_clear_history',
            'readline_list_history',
            'readline_read_history',
            'readline_write_history',
            'readline_completion_function',
            'readline_callback_handler_install',
            'readline_callback_read_char',
            'readline_callback_handler_remove',
            'readline_redisplay',
            'session_name',
            'session_module_name',
            'session_save_path',
            'session_id',
            'session_regenerate_id',
            'session_decode',
            'session_encode',
            'session_start',
            'session_destroy',
            'session_unset',
            'session_set_save_handler',
            'session_cache_limiter',
            'session_cache_expire',
            'session_set_cookie_params',
            'session_get_cookie_params',
            'session_write_close',
            'session_abort',
            'session_reset',
            'session_status',
            'session_register_shutdown',
            'session_commit',
            'shmop_open',
            'shmop_read',
            'shmop_close',
            'shmop_size',
            'shmop_write',
            'shmop_delete',
            'simplexml_load_file',
            'simplexml_load_string',
            'simplexml_import_dom',
            'socket_select',
            'socket_create',
            'socket_create_listen',
            'socket_create_pair',
            'socket_accept',
            'socket_set_nonblock',
            'socket_set_block',
            'socket_listen',
            'socket_close',
            'socket_write',
            'socket_read',
            'socket_getsockname',
            'socket_getpeername',
            'socket_connect',
            'socket_strerror',
            'socket_bind',
            'socket_recv',
            'socket_send',
            'socket_recvfrom',
            'socket_sendto',
            'socket_get_option',
            'socket_set_option',
            'socket_shutdown',
            'socket_last_error',
            'socket_clear_error',
            'socket_import_stream',
            'socket_sendmsg',
            'socket_recvmsg',
            'socket_cmsg_space',
            'socket_getopt',
            'socket_setopt',
            'spl_classes',
            'spl_autoload',
            'spl_autoload_extensions',
            'spl_autoload_register',
            'spl_autoload_unregister',
            'spl_autoload_functions',
            'spl_autoload_call',
            'class_parents',
            'class_implements',
            'class_uses',
            'spl_object_hash',
            'iterator_to_array',
            'iterator_count',
            'iterator_apply',
            'constant',
            'bin2hex',
            'hex2bin',
            'sleep',
            'usleep',
            'time_nanosleep',
            'time_sleep_until',
            'strptime',
            'flush',
            'wordwrap',
            'htmlspecialchars',
            'htmlentities',
            'html_entity_decode',
            'htmlspecialchars_decode',
            'get_html_translation_table',
            'sha1',
            'sha1_file',
            'md5',
            'md5_file',
            'crc32',
            'iptcparse',
            'iptcembed',
            'getimagesize',
            'getimagesizefromstring',
            'image_type_to_mime_type',
            'image_type_to_extension',
            'phpinfo',
            'phpversion',
            'phpcredits',
            'php_sapi_name',
            'php_uname',
            'php_ini_scanned_files',
            'php_ini_loaded_file',
            'strnatcmp',
            'strnatcasecmp',
            'substr_count',
            'strspn',
            'strcspn',
            'strtok',
            'strtoupper',
            'strtolower',
            'strpos',
            'stripos',
            'strrpos',
            'strripos',
            'strrev',
            'hebrev',
            'hebrevc',
            'nl2br',
            'basename',
            'dirname',
            'pathinfo',
            'stripslashes',
            'stripcslashes',
            'strstr',
            'stristr',
            'strrchr',
            'str_shuffle',
            'str_word_count',
            'str_split',
            'strpbrk',
            'substr_compare',
            'strcoll',
            'money_format',
            'substr',
            'substr_replace',
            'quotemeta',
            'ucfirst',
            'lcfirst',
            'ucwords',
            'strtr',
            'addslashes',
            'addcslashes',
            'rtrim',
            'str_replace',
            'str_ireplace',
            'str_repeat',
            'count_chars',
            'chunk_split',
            'trim',
            'ltrim',
            'strip_tags',
            'similar_text',
            'explode',
            'implode',
            'join',
            'setlocale',
            'localeconv',
            'nl_langinfo',
            'soundex',
            'levenshtein',
            'chr',
            'ord',
            'parse_str',
            'str_getcsv',
            'str_pad',
            'chop',
            'strchr',
            'sprintf',
            'printf',
            'vprintf',
            'vsprintf',
            'fprintf',
            'vfprintf',
            'sscanf',
            'fscanf',
            'parse_url',
            'urlencode',
            'urldecode',
            'rawurlencode',
            'rawurldecode',
            'http_build_query',
            'readlink',
            'linkinfo',
            'symlink',
            'link',
            'unlink',
            'exec',
            'system',
            'escapeshellcmd',
            'escapeshellarg',
            'passthru',
            'shell_exec',
            'proc_open',
            'proc_close',
            'proc_terminate',
            'proc_get_status',
            'proc_nice',
            'rand',
            'srand',
            'getrandmax',
            'mt_rand',
            'mt_srand',
            'mt_getrandmax',
            'getservbyname',
            'getservbyport',
            'getprotobyname',
            'getprotobynumber',
            'getmyuid',
            'getmygid',
            'getmypid',
            'getmyinode',
            'getlastmod',
            'base64_decode',
            'base64_encode',
            'password_hash',
            'password_get_info',
            'password_needs_rehash',
            'password_verify',
            'convert_uuencode',
            'convert_uudecode',
            'abs',
            'ceil',
            'floor',
            'round',
            'sin',
            'cos',
            'tan',
            'asin',
            'acos',
            'atan',
            'atanh',
            'atan2',
            'sinh',
            'cosh',
            'tanh',
            'asinh',
            'acosh',
            'expm1',
            'log1p',
            'pi',
            'is_finite',
            'is_nan',
            'is_infinite',
            'pow',
            'exp',
            'log',
            'log10',
            'sqrt',
            'hypot',
            'deg2rad',
            'rad2deg',
            'bindec',
            'hexdec',
            'octdec',
            'decbin',
            'decoct',
            'dechex',
            'base_convert',
            'number_format',
            'fmod',
            'inet_ntop',
            'inet_pton',
            'ip2long',
            'long2ip',
            'getenv',
            'putenv',
            'getopt',
            'sys_getloadavg',
            'microtime',
            'gettimeofday',
            'getrusage',
            'uniqid',
            'quoted_printable_decode',
            'quoted_printable_encode',
            'convert_cyr_string',
            'get_current_user',
            'set_time_limit',
            'header_register_callback',
            'get_cfg_var',
            'magic_quotes_runtime',
            'set_magic_quotes_runtime',
            'get_magic_quotes_gpc',
            'get_magic_quotes_runtime',
            'error_log',
            'error_get_last',
            'call_user_func',
            'call_user_func_array',
            'call_user_method',
            'call_user_method_array',
            'forward_static_call',
            'forward_static_call_array',
            'serialize',
            'unserialize',
            'var_dump',
            'var_export',
            'debug_zval_dump',
            'print_r',
            'memory_get_usage',
            'memory_get_peak_usage',
            'register_shutdown_function',
            'register_tick_function',
            'unregister_tick_function',
            'highlight_file',
            'show_source',
            'highlight_string',
            'php_strip_whitespace',
            'ini_get',
            'ini_get_all',
            'ini_set',
            'ini_alter',
            'ini_restore',
            'get_include_path',
            'set_include_path',
            'restore_include_path',
            'setcookie',
            'setrawcookie',
            'header',
            'header_remove',
            'headers_sent',
            'headers_list',
            'http_response_code',
            'connection_aborted',
            'connection_status',
            'ignore_user_abort',
            'parse_ini_file',
            'parse_ini_string',
            'is_uploaded_file',
            'move_uploaded_file',
            'gethostbyaddr',
            'gethostbyname',
            'gethostbynamel',
            'gethostname',
            'dns_check_record',
            'checkdnsrr',
            'dns_get_mx',
            'getmxrr',
            'dns_get_record',
            'intval',
            'floatval',
            'doubleval',
            'strval',
            'boolval',
            'gettype',
            'settype',
            'is_null',
            'is_resource',
            'is_bool',
            'is_long',
            'is_float',
            'is_int',
            'is_integer',
            'is_double',
            'is_real',
            'is_numeric',
            'is_string',
            'is_array',
            'is_object',
            'is_scalar',
            'is_callable',
            'pclose',
            'popen',
            'readfile',
            'rewind',
            'rmdir',
            'umask',
            'fclose',
            'feof',
            'fgetc',
            'fgets',
            'fgetss',
            'fread',
            'fopen',
            'fpassthru',
            'ftruncate',
            'fstat',
            'fseek',
            'ftell',
            'fflush',
            'fwrite',
            'fputs',
            'mkdir',
            'rename',
            'copy',
            'tempnam',
            'tmpfile',
            'file',
            'file_get_contents',
            'file_put_contents',
            'stream_select',
            'stream_context_create',
            'stream_context_set_params',
            'stream_context_get_params',
            'stream_context_set_option',
            'stream_context_get_options',
            'stream_context_get_default',
            'stream_context_set_default',
            'stream_filter_prepend',
            'stream_filter_append',
            'stream_filter_remove',
            'stream_socket_client',
            'stream_socket_server',
            'stream_socket_accept',
            'stream_socket_get_name',
            'stream_socket_recvfrom',
            'stream_socket_sendto',
            'stream_socket_enable_crypto',
            'stream_socket_shutdown',
            'stream_socket_pair',
            'stream_copy_to_stream',
            'stream_get_contents',
            'stream_supports_lock',
            'fgetcsv',
            'fputcsv',
            'flock',
            'get_meta_tags',
            'stream_set_read_buffer',
            'stream_set_write_buffer',
            'set_file_buffer',
            'stream_set_chunk_size',
            'set_socket_blocking',
            'stream_set_blocking',
            'socket_set_blocking',
            'stream_get_meta_data',
            'stream_get_line',
            'stream_wrapper_register',
            'stream_register_wrapper',
            'stream_wrapper_unregister',
            'stream_wrapper_restore',
            'stream_get_wrappers',
            'stream_get_transports',
            'stream_resolve_include_path',
            'stream_is_local',
            'get_headers',
            'stream_set_timeout',
            'socket_set_timeout',
            'socket_get_status',
            'realpath',
            'fnmatch',
            'fsockopen',
            'pfsockopen',
            'pack',
            'unpack',
            'get_browser',
            'crypt',
            'opendir',
            'closedir',
            'chdir',
            'chroot',
            'getcwd',
            'rewinddir',
            'readdir',
            'dir',
            'scandir',
            'glob',
            'fileatime',
            'filectime',
            'filegroup',
            'fileinode',
            'filemtime',
            'fileowner',
            'fileperms',
            'filesize',
            'filetype',
            'file_exists',
            'is_writable',
            'is_writeable',
            'is_readable',
            'is_executable',
            'is_file',
            'is_dir',
            'is_link',
            'stat',
            'lstat',
            'chown',
            'chgrp',
            'lchown',
            'lchgrp',
            'chmod',
            'touch',
            'clearstatcache',
            'disk_total_space',
            'disk_free_space',
            'diskfreespace',
            'realpath_cache_size',
            'realpath_cache_get',
            'mail',
            'ezmlm_hash',
            'openlog',
            'syslog',
            'closelog',
            'lcg_value',
            'metaphone',
            'ob_start',
            'ob_flush',
            'ob_clean',
            'ob_end_flush',
            'ob_end_clean',
            'ob_get_flush',
            'ob_get_clean',
            'ob_get_length',
            'ob_get_level',
            'ob_get_status',
            'ob_get_contents',
            'ob_implicit_flush',
            'ob_list_handlers',
            'ksort',
            'krsort',
            'natsort',
            'natcasesort',
            'asort',
            'arsort',
            'sort',
            'rsort',
            'usort',
            'uasort',
            'uksort',
            'shuffle',
            'array_walk',
            'array_walk_recursive',
            'count',
            'end',
            'prev',
            'next',
            'reset',
            'current',
            'key',
            'min',
            'max',
            'in_array',
            'array_search',
            'extract',
            'compact',
            'array_fill',
            'array_fill_keys',
            'range',
            'array_multisort',
            'array_push',
            'array_pop',
            'array_shift',
            'array_unshift',
            'array_splice',
            'array_slice',
            'array_merge',
            'array_merge_recursive',
            'array_replace',
            'array_replace_recursive',
            'array_keys',
            'array_values',
            'array_count_values',
            'array_column',
            'array_reverse',
            'array_reduce',
            'array_pad',
            'array_flip',
            'array_change_key_case',
            'array_rand',
            'array_unique',
            'array_intersect',
            'array_intersect_key',
            'array_intersect_ukey',
            'array_uintersect',
            'array_intersect_assoc',
            'array_uintersect_assoc',
            'array_intersect_uassoc',
            'array_uintersect_uassoc',
            'array_diff',
            'array_diff_key',
            'array_diff_ukey',
            'array_udiff',
            'array_diff_assoc',
            'array_udiff_assoc',
            'array_diff_uassoc',
            'array_udiff_uassoc',
            'array_sum',
            'array_product',
            'array_filter',
            'array_map',
            'array_chunk',
            'array_combine',
            'array_key_exists',
            'pos',
            'sizeof',
            'key_exists',
            'assert',
            'assert_options',
            'version_compare',
            'ftok',
            'str_rot13',
            'stream_get_filters',
            'stream_filter_register',
            'stream_bucket_make_writeable',
            'stream_bucket_prepend',
            'stream_bucket_append',
            'stream_bucket_new',
            'output_add_rewrite_var',
            'output_reset_rewrite_vars',
            'sys_get_temp_dir',
            'msg_get_queue',
            'msg_send',
            'msg_receive',
            'msg_remove_queue',
            'msg_stat_queue',
            'msg_set_queue',
            'msg_queue_exists',
            'sem_get',
            'sem_acquire',
            'sem_release',
            'sem_remove',
            'shm_attach',
            'shm_remove',
            'shm_detach',
            'shm_put_var',
            'shm_has_var',
            'shm_get_var',
            'shm_remove_var',
            'token_get_all',
            'token_name',
            'xml_parser_create',
            'xml_parser_create_ns',
            'xml_set_object',
            'xml_set_element_handler',
            'xml_set_character_data_handler',
            'xml_set_processing_instruction_handler',
            'xml_set_default_handler',
            'xml_set_unparsed_entity_decl_handler',
            'xml_set_notation_decl_handler',
            'xml_set_external_entity_ref_handler',
            'xml_set_start_namespace_decl_handler',
            'xml_set_end_namespace_decl_handler',
            'xml_parse',
            'xml_parse_into_struct',
            'xml_get_error_code',
            'xml_error_string',
            'xml_get_current_line_number',
            'xml_get_current_column_number',
            'xml_get_current_byte_index',
            'xml_parser_free',
            'xml_parser_set_option',
            'xml_parser_get_option',
            'utf8_encode',
            'utf8_decode',
            'xmlwriter_open_uri',
            'xmlwriter_open_memory',
            'xmlwriter_set_indent',
            'xmlwriter_set_indent_string',
            'xmlwriter_start_comment',
            'xmlwriter_end_comment',
            'xmlwriter_start_attribute',
            'xmlwriter_end_attribute',
            'xmlwriter_write_attribute',
            'xmlwriter_start_attribute_ns',
            'xmlwriter_write_attribute_ns',
            'xmlwriter_start_element',
            'xmlwriter_end_element',
            'xmlwriter_full_end_element',
            'xmlwriter_start_element_ns',
            'xmlwriter_write_element',
            'xmlwriter_write_element_ns',
            'xmlwriter_start_pi',
            'xmlwriter_end_pi',
            'xmlwriter_write_pi',
            'xmlwriter_start_cdata',
            'xmlwriter_end_cdata',
            'xmlwriter_write_cdata',
            'xmlwriter_text',
            'xmlwriter_write_raw',
            'xmlwriter_start_document',
            'xmlwriter_end_document',
            'xmlwriter_write_comment',
            'xmlwriter_start_dtd',
            'xmlwriter_end_dtd',
            'xmlwriter_write_dtd',
            'xmlwriter_start_dtd_element',
            'xmlwriter_end_dtd_element',
            'xmlwriter_write_dtd_element',
            'xmlwriter_start_dtd_attlist',
            'xmlwriter_end_dtd_attlist',
            'xmlwriter_write_dtd_attlist',
            'xmlwriter_start_dtd_entity',
            'xmlwriter_end_dtd_entity',
            'xmlwriter_write_dtd_entity',
            'xmlwriter_output_memory',
            'xmlwriter_flush',
            'zip_open',
            'zip_close',
            'zip_read',
            'zip_entry_open',
            'zip_entry_close',
            'zip_entry_read',
            'zip_entry_filesize',
            'zip_entry_name',
            'zip_entry_compressedsize',
            'zip_entry_compressionmethod',
            'dl',
            'cli_set_process_title',
            'cli_get_process_title',
            'mysql_affected_rows',
            'mysql_client_encoding',
            'mysql_close',
            'mysql_connect',
            'mysql_create_db',
            'mysql_data_seek',
            'mysql_db_name',
            'mysql_db_query',
            'mysql_drop_db',
            'mysql_errno',
            'mysql_error',
            'mysql_escape_string',
            'mysql_fetch_array',
            'mysql_fetch_assoc',
            'mysql_fetch_field',
            'mysql_fetch_lengths',
            'mysql_fetch_object',
            'mysql_fetch_row',
            'mysql_field_flags',
            'mysql_field_len',
            'mysql_field_name',
            'mysql_field_seek',
            'mysql_field_table',
            'mysql_field_type',
            'mysql_free_result',
            'mysql_get_client_info',
            'mysql_get_host_info',
            'mysql_get_proto_info',
            'mysql_get_server_info',
            'mysql_info',
            'mysql_insert_id',
            'mysql_list_dbs',
            'mysql_list_fields',
            'mysql_list_processes',
            'mysql_list_tables',
            'mysql_num_fields',
            'mysql_num_rows',
            'mysql_pconnect',
            'mysql_ping',
            'mysql_query',
            'mysql_real_escape_string',
            'mysql_result',
            'mysql_select_db',
            'mysql_set_charset',
            'mysql_stat',
            'mysql_tablename',
            'mysql_thread_id',
            'mysql_unbuffered_query',
        ];
    }
}

/*EOF*/
