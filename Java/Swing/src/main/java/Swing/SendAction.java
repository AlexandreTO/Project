package Swing;

import javax.swing.*;
import java.awt.event.ActionEvent;

/**
 * SendAction
 */
public class SendAction extends AbstractAction {
    /**
     *
     */
    private static final long serialVersionUID = -7704640789688556807L;

    public SendAction(String texte) {
        super(texte);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        System.out.println("Sent text !");

    }
}