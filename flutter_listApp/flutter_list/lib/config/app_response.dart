// Digunakan untuk menampilkan response dari API
import 'dart:convert';

import 'package:d_method/d_method.dart';
import 'package:flutter_list/config/failure.dart';
import 'package:http/http.dart';

class AppResponse {
  static Map data(Response response){
    DMethod.printResponse(response);

    switch (response.statusCode) {
      // Jika response status code 200 atau 201 sukses
      case 200:  //read
      case 201:  //create, update
        var responseBody = jsonDecode(response.body);
        return responseBody;
      case 204: //delete
        return {'success': true};  
      case 400: 
        throw BadRequestFailure(response.body);
      case 401:      
        throw UnauthorisedFailure(response.body);
      case 422: 
        throw InvalidInputFailure(response.body);
      case 403: 
        throw ForbiddenFailure(response.body);
      case 404: 
        throw NotFoundFailure(response.body);
      case 500: 
        throw ServerFailure(response.body);
      default:
        throw FetchFailure(response.body);
    }
  }
}