
package tn.iit.dao;

import java.util.ArrayList;
import java.util.List;
import tn.iit.entity.Fleur;


public class FleurBD {
    private static List<Fleur> listFleur = new ArrayList<Fleur>();
     static {
    listFleur.add(new Fleur("Oriental Hybrid","Lilies", "Red", 45));
    listFleur.add(new Fleur("Standard Carnation","Carnations", "White", 33));
    listFleur.add(new Fleur("Spray Rose","Crocus", "Purple", 52));
    listFleur.add(new Fleur("Cymbid 521","Orchids", "Yellow", 35));
    listFleur.add(new Fleur("Phalaenopsis Anthura Kobe","Orchids", "White", 23));
    listFleur.add(new Fleur("Hybrid Limonium"," Limonium", "Purple", 12));
    listFleur.add(new Fleur("Dendrobium Alika","Orchids", "White", 50));
    listFleur.add(new Fleur("Dendrobium Burana Jade"," Limonium", "Green", 44));    
    listFleur.add(new Fleur("Acontium Arendsii","Flowers and Fillers", "Blue", 62));
    listFleur.add(new Fleur(" Amaryllis Benfica","Flowers and Fillers", "Red", 88));
    listFleur.add(new Fleur("Dendrobium Burana Jade"," Limonium", "Green", 44));
    }
    public static List<Fleur> getListFleurs() {
        return listFleur;
    }
      
    public static Fleur getFleur(Long code) {
         for(Fleur fleurIt: listFleur) {
                    if(fleurIt.getCode().equals(code)) {
                        return fleurIt;
                    }
           }
         return null;
    }

    public static void addFleur(Fleur fleur) {
        String lib = fleur.getLib();
        String categorie = fleur.getCategorie();
        String couleur = fleur.getCouleur();
        int qte = fleur.getQte();
        Fleur fleur1 = new Fleur(lib,categorie,couleur,qte);
        listFleur.add(fleur1);
    }
    public static String addQte(Long code, int qte) {
         for(Fleur fleurIt: listFleur) {
                    if(fleurIt.getCode().equals(code)) {
                         fleurIt.addQte(qte);
                         return "Qte ajouté avec sucess !";
                    }else{
                         return "Code n'existe pas !";
                    }
           }
         return "Liste des fleurs vide !";
    }
     public static void removeQte(Long code, int qte) {
         for(Fleur fleurIt: listFleur) {
                    if(fleurIt.getCode().equals(code)) {
                         fleurIt.removeQte(qte);
                    }
           }
    }
    public static void deleteFleur(Long code) {
           for(Fleur fleurIt: listFleur) {
                    if(fleurIt.getCode().equals(code)) {
                        listFleur.remove(fleurIt);
                    }
           }
    } 
    public static void update(Long code,Fleur fleur) {
           for(Fleur fleurIt: listFleur) {
                    if(fleurIt.getCode().equals(code)) {
                          fleurIt.setLib(fleur.getLib());
                          fleurIt.setCategorie(fleur.getCategorie());
                          fleurIt.setCouleur(fleur.getCouleur());
                          fleurIt.setQte(fleur.getQte());
                    }
           }
    }   
    
}
