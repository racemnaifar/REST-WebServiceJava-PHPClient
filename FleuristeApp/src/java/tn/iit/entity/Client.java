
package tn.iit.entity;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="Client")
public class Client {
    private String nomPrenom;
    private String email;
    private String username;
    private String motdepasse;

    public Client(String nomPrenom, String email, String username, String motdepasse) {
        this.nomPrenom = nomPrenom;
        this.email = email;
        this.username = username;
        this.motdepasse = motdepasse;
    }
    
    

    public Client() {
    }

    public String getNomPrenom() {
        return nomPrenom;
    }

    public void setNomPrenom(String nomPrenom) {
        this.nomPrenom = nomPrenom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getMotdepasse() {
        return motdepasse;
    }

    public void setMotdepasse(String motdepasse) {
        this.motdepasse = motdepasse;
    }
    
}
