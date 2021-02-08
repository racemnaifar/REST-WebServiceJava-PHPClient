
package tn.iit.dao;

import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import tn.iit.entity.Commande;
import tn.iit.entity.Fleur;
import tn.iit.entity.LigneCommande;

public class CommandeBD {
    private static List<Commande> listCommandes = new ArrayList<>();
    private static HashMap<Long, Integer> hashMap = new HashMap<>();
    private static HashMap<Long, Integer> hashMap2 = new HashMap<>();
    private static HashMap<Long, Integer> hashMap3 = new HashMap<>();
    static {
    hashMap.put(1L, 5);
    hashMap.put(2L, 15);
    hashMap2.put(3L, 10);
    hashMap2.put(4L, 2);
    hashMap2.put(7L, 4);
    hashMap3.put(10L, 4);
    hashMap3.put(5L, 1);

    listCommandes.add(new Commande("2021-01-01","racem123",hashMap));
    listCommandes.add(new Commande("2021-01-01","jihen123",hashMap2));
    listCommandes.add(new Commande("2021-01-01","jihen123",hashMap2));
    listCommandes.add(new Commande("2021-01-01","jihen123",hashMap));
    listCommandes.add(new Commande("2021-01-01","racem123",hashMap3));
    listCommandes.add(new Commande("2021-01-01","ahmed123",hashMap));
    listCommandes.add(new Commande("2021-01-01","ahmed123",hashMap2));
    listCommandes.add(new Commande("2021-01-01","jihen123",hashMap3));
    listCommandes.add(new Commande("2021-01-01","racem123",hashMap3));
    listCommandes.add(new Commande("2021-01-01","ahmed123",hashMap));
    }
     public static List<Commande> getListCommandes() {
        return listCommandes;
    }
    public static Commande getCommande(Long code) {
        for(Commande commandeIt: listCommandes) {
                    if(commandeIt.getCode().equals(code)) {
                        return commandeIt;
                    }
           }
         return null;
    }
     public static List<Commande> getCommandeByUsername(String username) {
        List<Commande> listCommandesuser = new ArrayList<>();
        for(Commande commandeIt: listCommandes) {
                    if(commandeIt.getId_client().equals(username)) {
                        listCommandesuser.add(commandeIt);
                    }
           }
         return listCommandesuser;
    }
    public static Boolean verifyQte(Long code,int qte){
         for(Fleur fleurIt: FleurBD.getListFleurs()) {
                    if(fleurIt.getCode().equals(code)) {
                        if(fleurIt.getQte() >= qte){
                            fleurIt.setQte(fleurIt.getQte()- qte);
                            return true;
                        }
                    }
           }
         return false;
    }        
    public static void addCommande(String date,String client_id,List<LigneCommande> listF){
         HashMap<Long, Integer> listFQte = new HashMap<>();
         Commande commande = new Commande(date,client_id,listFQte);
         if(verify(listF) != 0){
             listCommandes.add(commande);
         }
         for(LigneCommande lgcommandeIt: listF){
            if((CommandeBD.verifyQte(lgcommandeIt.getCode(),lgcommandeIt.getQte()) == true)){         
                listFQte.put(lgcommandeIt.getCode(), lgcommandeIt.getQte());              
           }  
         }        
    }
    
    public static void addCommande2(Commande commande){
        String date = commande.getDate();
        HashMap<Long, Integer> listFQte = commande.getListCommande();
        String id_client = commande.getId_client();
        Commande commandel = new Commande(date,id_client,listFQte);
        listCommandes.add(commandel);
               
    }
    
    public static void deleteCom(Long code) {
           for(Commande commandeIt: listCommandes) {
                    if(commandeIt.getCode().equals(code)) {
                        listCommandes.remove(commandeIt);
                    }
           }
    }   
    public static int verify(List<LigneCommande> listF){
         int c =0;
                for(Fleur fleurIt: FleurBD.getListFleurs()) {
                    for(LigneCommande lg: listF){
                        if(fleurIt.getCode().equals(lg.getCode())) {
                              if(fleurIt.getQte() >= lg.getQte()){
                                  c++;
                              }
                        }
                    }                    
                }
          return c;
         }
}
