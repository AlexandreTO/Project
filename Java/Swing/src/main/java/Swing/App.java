package Swing;

import javax.swing.*;

/**
 * Hello world!
 *
 */
public class App {
    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                ChatFrame window = new ChatFrame();
            }
        });
    }
}
