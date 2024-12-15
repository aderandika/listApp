import 'package:flutter_list/models/user_model.dart';

class TaskModel {
    int id;
    int idUser;
    String namaTugas;
    String deskripsi;
    DateTime tglTugas;
    String status;
    String prioritas;
    DateTime createdAt;
    DateTime updatedAt;
    UserModel user;

    TaskModel({
        required this.id,
        required this.idUser,
        required this.namaTugas,
        required this.deskripsi,
        required this.tglTugas,
        required this.status,
        required this.prioritas,
        required this.createdAt,
        required this.updatedAt,
        required this.user,
    });

    factory TaskModel.fromJson(Map<String, dynamic> json) => TaskModel(
        id: json["id"],
        idUser: json["id_user"],
        namaTugas: json["nama_tugas"],
        deskripsi: json["deskripsi"],
        tglTugas: DateTime.parse(json["tgl_tugas"]),
        status: json["status"],
        prioritas: json["prioritas"],
        createdAt: DateTime.parse(json["created_at"]).toLocal(),
        updatedAt: DateTime.parse(json["updated_at"]).toLocal(),
        user: UserModel.fromJson(json["user"]),
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "id_user": idUser,
        "nama_tugas": namaTugas,
        "deskripsi": deskripsi,
        "tgl_tugas": tglTugas.toIso8601String(),
        "status": status,
        "prioritas": prioritas,
        "created_at": createdAt.toIso8601String(),
        "updated_at": updatedAt.toIso8601String(),
        "user": user.toJson(),
    };
}