import 'package:flutter_list/models/task_model.dart';

class ReminderModel {
    int id;
    int idTask;
    DateTime waktuPengingat;
    DateTime createdAt;
    DateTime updatedAt;
    TaskModel task;

    ReminderModel({
        required this.id,
        required this.idTask,
        required this.waktuPengingat,
        required this.createdAt,
        required this.updatedAt,
        required this.task,
    });

    factory ReminderModel.fromJson(Map<String, dynamic> json) => ReminderModel(
        id: json["id"],
        idTask: json["id_task"],
        waktuPengingat: json["waktu_pengingat"],
        createdAt: DateTime.parse(json["created_at"]).toLocal(),
        updatedAt: DateTime.parse(json["updated_at"]).toLocal(),
        task: TaskModel.fromJson(json["task"]),
    );

    Map<String, dynamic> toJson() => {
        "id": id,
        "id_task": idTask,
        "waktu_pengingat": waktuPengingat,
        "created_at": createdAt.toIso8601String(),
        "updated_at": updatedAt.toIso8601String(),
        "task": task.toJson(),
    };
}
