/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package ptut.vue;

import java.awt.event.KeyEvent;

/**
 *
 * @author Florian Hauwelle
 */
public class FenCommande extends javax.swing.JFrame {

    /**
     * Creates new form FenCommande
     */
    public FenCommande() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        pannCommande = new javax.swing.JPanel();
        lbl_idClient = new javax.swing.JLabel();
        tf_idClient = new javax.swing.JTextField();
        lbl_numCommande = new javax.swing.JLabel();
        tf_numCommande = new javax.swing.JTextField();
        lbl_article = new javax.swing.JLabel();
        tf_article = new javax.swing.JTextField();
        lbl_statut = new javax.swing.JLabel();
        tf_statut = new javax.swing.JTextField();
        lbl_total = new javax.swing.JLabel();
        tf_total = new javax.swing.JTextField();
        bt_retour = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Historique des commandes");

        lbl_idClient.setText("ID Client");

        lbl_numCommande.setText("N° commande");

        lbl_article.setText("Nb articles");

        tf_article.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                tf_articleActionPerformed(evt);
            }
        });
        tf_article.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                tf_articleKeyTyped(evt);
            }
        });

        lbl_statut.setText("Statut");

        lbl_total.setText("Total");

        tf_total.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                tf_totalKeyTyped(evt);
            }
        });

        bt_retour.setText("Retour");
        bt_retour.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                bt_retourActionPerformed(evt);
            }
        });

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null}
            },
            new String [] {
                "ID article", "Libellé article", "Prix"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.Object.class, java.lang.Object.class, java.lang.Double.class
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }
        });
        jScrollPane1.setViewportView(jTable1);

        javax.swing.GroupLayout pannCommandeLayout = new javax.swing.GroupLayout(pannCommande);
        pannCommande.setLayout(pannCommandeLayout);
        pannCommandeLayout.setHorizontalGroup(
            pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pannCommandeLayout.createSequentialGroup()
                .addGap(29, 29, 29)
                .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(pannCommandeLayout.createSequentialGroup()
                        .addComponent(lbl_idClient, javax.swing.GroupLayout.PREFERRED_SIZE, 74, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(tf_idClient, javax.swing.GroupLayout.PREFERRED_SIZE, 107, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 355, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(pannCommandeLayout.createSequentialGroup()
                        .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(pannCommandeLayout.createSequentialGroup()
                                .addGap(28, 28, 28)
                                .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(lbl_statut, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(lbl_article, javax.swing.GroupLayout.PREFERRED_SIZE, 78, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(lbl_total, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, pannCommandeLayout.createSequentialGroup()
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(lbl_numCommande)))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(tf_numCommande, javax.swing.GroupLayout.PREFERRED_SIZE, 123, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tf_article, javax.swing.GroupLayout.PREFERRED_SIZE, 80, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tf_statut, javax.swing.GroupLayout.PREFERRED_SIZE, 80, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(tf_total, javax.swing.GroupLayout.PREFERRED_SIZE, 80, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(pannCommandeLayout.createSequentialGroup()
                        .addGap(47, 47, 47)
                        .addComponent(bt_retour)))
                .addContainerGap(27, Short.MAX_VALUE))
        );
        pannCommandeLayout.setVerticalGroup(
            pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pannCommandeLayout.createSequentialGroup()
                .addGap(50, 50, 50)
                .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lbl_numCommande)
                    .addComponent(tf_numCommande, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lbl_idClient)
                    .addComponent(tf_idClient, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(31, 31, 31)
                .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(pannCommandeLayout.createSequentialGroup()
                        .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lbl_article)
                            .addComponent(tf_article, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(28, 28, 28)
                        .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lbl_statut)
                            .addComponent(tf_statut, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(73, 73, 73)
                        .addGroup(pannCommandeLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(lbl_total)
                            .addComponent(tf_total, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(76, 76, 76)
                        .addComponent(bt_retour))
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 262, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(57, Short.MAX_VALUE))
        );

        getContentPane().add(pannCommande, java.awt.BorderLayout.CENTER);

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void tf_articleActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_tf_articleActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_tf_articleActionPerformed
    
    // Méthode empêchant la saisie non numérique
    private void tf_articleKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_tf_articleKeyTyped
        char c = evt.getKeyChar();
        if(((c <'0')|| (c >'9')) && (c != KeyEvent.VK_BACK_SPACE)){
            evt.consume(); // ignorer l'événement
        }
    }//GEN-LAST:event_tf_articleKeyTyped
    
    // Méthode empêchant la saisie non numérique
    private void tf_totalKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_tf_totalKeyTyped
        char c = evt.getKeyChar();
        if(((c <'0')|| (c >'9')) && (c != KeyEvent.VK_BACK_SPACE)){
            evt.consume(); // ignorer l'événement
        }
    }//GEN-LAST:event_tf_totalKeyTyped

    private void bt_retourActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_bt_retourActionPerformed
        FenAccueil FenMain = new FenAccueil();
        FenMain.setVisible(true);
        this.setVisible(false);
    }//GEN-LAST:event_bt_retourActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton bt_retour;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTable jTable1;
    private javax.swing.JLabel lbl_article;
    private javax.swing.JLabel lbl_idClient;
    private javax.swing.JLabel lbl_numCommande;
    private javax.swing.JLabel lbl_statut;
    private javax.swing.JLabel lbl_total;
    private javax.swing.JPanel pannCommande;
    private javax.swing.JTextField tf_article;
    private javax.swing.JTextField tf_idClient;
    private javax.swing.JTextField tf_numCommande;
    private javax.swing.JTextField tf_statut;
    private javax.swing.JTextField tf_total;
    // End of variables declaration//GEN-END:variables
}
