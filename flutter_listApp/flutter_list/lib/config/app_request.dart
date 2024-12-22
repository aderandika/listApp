// Digunakan pada saat kita akan melakukan request ke API 
class AppRequest {
  static Map<String, String> header([String? bearerToken]) { // Membuat header untuk request
    if (bearerToken == null) {
      return {
        'Accept': 'application/json',
      }; 
    }else {
        return {
        'Accept': 'application/json',
        'Authorization': 'Bearer $bearerToken',
      };
    }
    
  }
}