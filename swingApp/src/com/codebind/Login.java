package com.codebind;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.InputMethodEvent;
import java.awt.event.InputMethodListener;

//giving the Login class attributes and methods from the JFrame class
public class Login extends JFrame {
    private JTextField txtReg;
    private JButton OKButton;
    private JButton cancelButton;
    private JPanel Main;
    private JLabel lblLog;
    private JTextField passwordField;

    //creating the Login constructor
    public Login() {
        //setting form title
        setTitle("Login Form");
        //setting size for Reg field
        txtReg.setSize(20, 20);
        //ok button listener when clicked
        OKButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String reg = txtReg.getText();
                passwordField.getText();
                //checking if field is empty
                if(reg.isEmpty()){
                    JOptionPane.showMessageDialog(null, "RegNo. should not be empty!", "Error", JOptionPane.ERROR_MESSAGE);
                }else {
                    JOptionPane.showMessageDialog(null, "Registration for " + reg + " successful.");
                    //linking to the Reg Form
                    //creating object with Reg constructor
                    Reg R = new Reg();
                    R.setContentPane(new Reg().RegPanel);
                    R.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
                    R.setVisible(true);
                    R.pack();
                }
            }
        });
        //Cancel button listener when clicked
        cancelButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });
        passwordField.addInputMethodListener(new InputMethodListener() {
            @Override
            public void inputMethodTextChanged(InputMethodEvent event) {
                passwordField.get
            }

            @Override
            public void caretPositionChanged(InputMethodEvent event) {

            }
        });
    }

    public static void main(String[] args) {
        //Creating object with Login constructor
        Login J = new Login();
        J.setContentPane(new Login().Main);
        J.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        J.setVisible(true);
        J.pack();
//        Reg R = new Reg();
//        R.setContentPane(new Reg().RegPanel);
//        R.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
//        R.setVisible(true);
//        R.pack();
    }
}
