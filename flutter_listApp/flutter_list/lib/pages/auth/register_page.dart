import 'package:flutter/material.dart';
import 'package:flutter_list/config/app_constants.dart';
import 'package:google_fonts/google_fonts.dart';

class RegisterPage extends StatefulWidget {
  const RegisterPage({super.key});

  @override
  State<RegisterPage> createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {
  final edtUsername = TextEditingController();
  final edtEmail = TextEditingController();
  final edtPassword = TextEditingController();
  final formKey = GlobalKey<FormState>();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        fit: StackFit.expand,
        children: [
          // Untuk header nama aplikasi
          Column(
            children: [
              Text(
                AppConstants.appName,
                style: GoogleFonts.poppins(
                  fontSize: 40,
                  color: Colors.blue[900],
                  fontWeight: FontWeight.w500,
                ),

              ),
            ],
          ),
        ],
      ),
    );
  }
}