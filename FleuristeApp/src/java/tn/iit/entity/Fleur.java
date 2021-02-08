
package tn.iit.entity;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="Fleur")
public class Fleur {
    private Long code;
    private String lib;
    private String categorie;
    private String couleur;
    private int qte; 
    private static Long countCodeF = 0L; 
 
    public Fleur(String lib, String categorie, String couleur, int qte) {
        this.code = ++countCodeF;
        this.lib = lib;
        this.categorie = categorie;
        this.couleur = couleur;
        this.qte = qte;
    }
    public Fleur() {
    }

    public Long getCode() {
        return code;
    }

    public void setCode(Long code) {
        this.code = code;
    }


    public String getLib() {
        return lib;
    }

    public void setLib(String lib) {
        this.lib = lib;
    }

    public String getCategorie() {
        return categorie;
    }

    public void setCategorie(String categorie) {
        this.categorie = categorie;
    }

    public String getCouleur() {
        return couleur;
    }

    public void setCouleur(String couleur) {
        this.couleur = couleur;
    }

    public int getQte() {
        return qte;
    }

    public void setQte(int qte) {
        this.qte = qte;
    }
    public void addQte(int qte) {
        this.qte += qte;
    }
    public void removeQte(int qte) {
        this.qte -= qte;
    }
}
