package com.codebind;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
//giving the Reg class methods and attributes from the JFrame class
public class Reg extends JFrame{
         JPanel RegPanel;
         JTextField sname;
         JTextField fname;
         JTextField age;
        JComboBox sex;
         JComboBox course;
         JButton closeButton;
    private JButton submitButton;
    private JButton resetButton;
    public void reset(){
        sname.setText("");
        fname.setText("");
        age.setText("");
    }
    public void submit(){
        try{
            String url = "INSERT INTO `swing` VALUES (?, ?, ?, ?, ?)";
        }catch (Exception e){

        }
    }
    //Creating Reg constructor
        public Reg() {

            submitButton.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {

                }
            });
            resetButton.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    reset();
                }
            });
            closeButton.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    System.exit(0);
                }
            });
        }
}
