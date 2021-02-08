
package tn.iit.entity;

import java.util.Date;
import java.util.HashMap;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="Commande")
public class Commande {
    private Long code;
    private String date;
    private String id_client;
    private HashMap<Long, Integer> listFQte;
    private static Long countCode = 0L; 


    public Commande(String date,String client_id, HashMap<Long,Integer> listFQte) {
        this.code = ++countCode;
        this.date = date;
        this.listFQte = listFQte;
        this.id_client = client_id;
    }
      public Commande(Long code,String client_id, String date) {
        this.code = ++countCode;
        this.date = date;
        this.listFQte = new HashMap<>();
        this.id_client = client_id;
    }

    public Commande() {
    }
    

    public Long getCode() {
        return code;
    }

    public void setCode(Long code) {
        this.code = code;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getId_client() {
        return id_client;
    }

    public void setId_client(String id_client) {
        this.id_client = id_client;
    }

    public HashMap<Long, Integer> getListCommande() {
        return listFQte;
    }

    public void setListCommande(HashMap<Long, Integer> listCommande) {
        this.listFQte = listCommande;
    }
}
