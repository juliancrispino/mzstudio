import javax.swing.*;

public class LoginProyecto {
    public static void main(String[] args) {

        //Datos guardados
        String usuario = "julian";
        String contraseña = "julian123";

        //Bienvenida
        JOptionPane.showMessageDialog(null,"Bienvenido al sistema");
        //Ingreso de datos, con 3 oportunidades
        for (int i=0; i<3; i++){
            //Ingreso usuario y contraseña
            String usuarioIng = JOptionPane.showInputDialog("Ingrese nombre de usuario");
            String contraseñaIng = JOptionPane.showInputDialog("Ingrese contraseña");
            if (usuarioIng.equals(usuario) && contraseñaIng.equals(contraseña)){
                JOptionPane.showMessageDialog(null, "Acceso confirmado. Bienvenido "+ usuario);
                break;
            } else {
                JOptionPane.showMessageDialog(null, "Usuario y/o contraseña incorrecta");
                switch (i){
                    case 0:
                    case 1:
                        JOptionPane.showMessageDialog(null, "Tiene "+ (2-i) +" intentos restantes");
                        break;
                    case 2:
                        JOptionPane.showMessageDialog(null, "Acceso denegado. Su cuenta ha sido bloqueada por su seguridad.");
                        break;

                }
            }
        }

    }
}
