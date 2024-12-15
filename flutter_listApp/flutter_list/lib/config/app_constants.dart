class AppConstants {
  // Nama aplikasi
  static const appname = 'List App';

  /// Host = _host = 'http://192.168.197.254:8000'
  static const _host = 'http://192.168.197.254:8000';

  /// Base URL = 'http://192.168.197.254:8000/api'
  static const baseURL = '$_host/api';

  /// Base URL Image = = 'http://192.168.197.254:8000/storage'
  static const baseImageURL = '$_host/storage';

  /// Status 
  static const statusTask = [
    'belum_selesai', 
    'sedang_dikerjakan',
    'selesai'
  ];

}