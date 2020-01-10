package Swing;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**
 * ChatFrame
 */
public class ChatFrame extends JFrame implements ActionListener {
        private JTextField tf;
        /**
        *
        */
        private static final long serialVersionUID = 1L;

        public ChatFrame() {
                super();
                build();
        }

        private JFrame build() {
                // Creating window
                JFrame frame = new JFrame("Frame");
                frame.setDefaultCloseOperation(EXIT_ON_CLOSE);
                frame.setSize(400, 400);

                // Creating MenuBar
                JMenuBar mb = new JMenuBar(); // JMenuBar to create a menu bar
                JMenu m1 = new JMenu("File"); // Add buttons on the menu
                JMenu m2 = new JMenu("Help");
                mb.add(m1);
                mb.add(m2);
                JMenuItem m11 = new JMenuItem("Open"); // JMenuIdem add an item in the button menu
                JMenuItem m22 = new JMenuItem("Save as ");
                m1.add(m11);
                m1.add(m22);

                // Creating the bottom panel
                JPanel panel = new JPanel();
                JLabel label = new JLabel("Enter Text");
                JTextField tf = new JTextField(10);
                JButton send = new JButton(new SendAction("Send"));
                JButton reset = new JButton(new ResetAction("Reset"));
                panel.add(label); // Components Added using Flow Layout
                panel.add(label); // Components Added using Flow Layout
                panel.add(tf);
                panel.add(send);
                panel.add(reset);

                // Text Area in the center
                JTextArea ta = new JTextArea();

                frame.getContentPane().add(BorderLayout.SOUTH, panel);
                frame.getContentPane().add(BorderLayout.NORTH, mb);
                frame.getContentPane().add(BorderLayout.CENTER, ta);
                frame.setVisible(true);

                return frame;
        }

        @Override
        public void actionPerformed(ActionEvent e) {

        }

        public JTextField getTf() {
                return tf;
        }

}