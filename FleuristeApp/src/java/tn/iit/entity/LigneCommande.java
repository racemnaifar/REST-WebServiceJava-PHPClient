
package tn.iit.entity;

public class LigneCommande {
    private Long code;
    private int qte;

    public LigneCommande(Long code, int qte) {
        this.code = code;
        this.qte = qte;
    }

    public LigneCommande() {
    }

    public Long getCode() {
        return code;
    }

    public int getQte() {
        return qte;
    }

    public void setCode(Long code) {
        this.code = code;
    }

    public void setQte(int qte) {
        this.qte = qte;
    }
    
}
