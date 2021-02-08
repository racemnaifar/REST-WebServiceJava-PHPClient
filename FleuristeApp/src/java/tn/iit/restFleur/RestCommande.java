
package tn.iit.restFleur;

import java.util.Date;
import java.util.HashMap;
import java.util.List;
import javax.jws.WebParam;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.QueryParam;
import javax.ws.rs.core.MediaType;
import javax.xml.bind.annotation.adapters.XmlJavaTypeAdapter;
import org.hibernate.validator.internal.xml.binding.Adapter1;
import tn.iit.dao.CommandeBD;
import tn.iit.entity.Commande;
import tn.iit.entity.LigneCommande;

@Path("commande")
public class RestCommande {

    @Context
    private UriInfo context;
    private static Long count = 0L; 
    
    @XmlJavaTypeAdapter(Adapter1.class)    
    private HashMap<Long, Integer> hashMap;
 
    public RestCommande() {
    }
    @GET
    @Produces(MediaType.APPLICATION_XML)
    public List<Commande> getListCommands() {       
            return CommandeBD.getListCommandes();
    }

    
    @POST
    @Path("/add2")
    @Produces(MediaType.APPLICATION_XML)
    public void addManyCommand2(@WebParam Commande commande) {
         CommandeBD.addCommande2(commande);
    }
    
    @DELETE
    @Produces(MediaType.APPLICATION_XML)
    public void deleteCommande(@QueryParam("codeCom") Long codeCom) {
            CommandeBD.deleteCom(codeCom);
    }
    @PUT
    @Consumes({"application/xml", "application/json"})
    public void updateCommande(@QueryParam("codeCom") Long codeCom,@WebParam Commande commande) {
          //  FleurBD.update(code,fleur);
    }
    
    @GET
    @Path("GetByCode")
    @Produces(MediaType.APPLICATION_XML)
    public Commande find(@QueryParam("codeCom") Long codeCom) {
            return CommandeBD.getCommande(codeCom);
    }
    
    @GET
    @Path("GetByUsername")
    @Produces(MediaType.APPLICATION_XML)
    public List<Commande> find(@QueryParam("username") String username) {
            return CommandeBD.getCommandeByUsername(username);
    }
}
