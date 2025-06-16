package loginapp;

import java.awt.*;
import javax.swing.border.AbstractBorder;

public class RoundedBorder extends AbstractBorder {
    private final int radius;

    public RoundedBorder(int radius) {
        this.radius = radius;
    }

    @Override
    public void paintBorder(Component c, Graphics g, int x, int y, int width, int height) {
        Graphics2D g2 = (Graphics2D) g.create();
        g2.setRenderingHint(RenderingHints.KEY_ANTIALIASING, RenderingHints.VALUE_ANTIALIAS_ON);
        g2.setColor(Color.GRAY); // Border color
        g2.setStroke(new BasicStroke(1.5f)); // Optional: thicker border
        g2.drawRoundRect(x, y, width - 1, height - 1, radius, radius);
        g2.dispose();
    }

    @Override
   public Insets getBorderInsets(Component c) {
    return new Insets(5, 10, 5, 10);  // top, left, bottom, right
}

    @Override
    public Insets getBorderInsets(Component c, Insets insets) {
    insets.top = 5;
    insets.left = 10;
    insets.bottom = 5;
    insets.right = 10;
    return insets;
}
}
