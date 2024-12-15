import 'package:flutter_list/models/user_model.dart';

class CategoryModel {
    int id;
    int idUser;
    String namaKategori;
    String warnaLabel;
    DateTime createdAt;
    DateTime updatedAt;
    UserModel user;

    CategoryModel({
        required this.id,
        required this.idUser,
        required this.namaKategori,
        required this.warnaLabel,
        required this.createdAt,
        required this.updatedAt,
        required this.user,
    });

    factory CategoryModel.fromJson(Map<String, dynamic> json) => CategoryModel(
        id: json["id"],
        idUser: json["id_user"],
        namaKategori: json["nama_kategori"],
        warnaLabel: json["warna_label"],
        createdAt: DateTime.parse(json["created_at"]).toLocal(),
        updatedAt: DateTime.parse(json["updated_at"]).toLocal(),
        user: UserModel.fromJson(json["user"]),
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "id_user": idUser,
        "nama_kategori": namaKategori,
        "warna_label": warnaLabel,
        "created_at": createdAt.toIso8601String(),
        "updated_at": updatedAt.toIso8601String(),
        "user": user.toJson(),
    };
}