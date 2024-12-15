import 'package:intl/intl.dart';

class AppFormat {
  // Format Tanggal
  static String justDate(DateTime dateTime)
  {
    return DateFormat('yyyy-MM-dd').format(dateTime);
  }

  /// Untuk Tanggal Bulan & Tahun yang tidak full
  /// 2 Januari 99
  static String shortDate(dynamic source)
  {
    if (source is String) {
      return DateFormat('EEEE, d MMM yy').format(DateTime.parse(source));
    }else if(source is DateTime){
      return DateFormat('EEEE, d MMM yy').format(source);
    } else {
      return 'Not Valid';
    }
  }

   /// Untuk Tanggal Bulan & Tahun yang full
   /// 2 Januari 2024
  static String fullDate(dynamic source)
  {
    if (source is String) {
      return DateFormat('EEEE, d MMMM yyyy').format(DateTime.parse(source));
    }else if(source is DateTime){
      return DateFormat('EEEE, d MMMM yyyy').format(source);
    } else {
      return 'Not Valid';
    }
  }
}  