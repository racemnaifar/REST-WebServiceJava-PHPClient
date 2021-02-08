
package tn.iit.restFleur;

import java.util.List;
import javax.jws.WebParam;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Produces;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.QueryParam;
import javax.ws.rs.core.MediaType;
import tn.iit.dao.FleurBD;
import tn.iit.entity.Fleur;


@Path("fleur")
public class RestFleur {

    @Context
    private UriInfo context;

    public RestFleur() {
    }    
    
    @GET
    @Produces(MediaType.APPLICATION_XML)
    public List<Fleur> getListFleurs() {       
            return FleurBD.getListFleurs();
    }

    @POST
    @Path("addQte")
    @Produces(MediaType.APPLICATION_XML)
    public String addQteFleur(@QueryParam("code") Long code,@QueryParam("qte") int qte) {       
            return FleurBD.addQte(code,qte);
    }

    @POST
    @Path("removeQte")
    @Produces(MediaType.APPLICATION_XML)
    public void removeQteFleur(@QueryParam("code") Long code,@QueryParam("qte") int qte) {       
             FleurBD.removeQte(code,qte);
    }
    
    @POST
    @Produces(MediaType.APPLICATION_XML)
    public void addFleur(@WebParam Fleur fleur) {
            FleurBD.addFleur(fleur);
    }
    
    @DELETE
    @Produces(MediaType.APPLICATION_XML)
    public void deleteFleur(@QueryParam("code") Long code) {
            FleurBD.deleteFleur(code);
    }
    
    @PUT
    @Consumes({"application/xml", "application/json"})
    public void updateFleur(@QueryParam("code") Long code,@WebParam Fleur fleur) {
            FleurBD.update(code,fleur);
    }
    @GET
    @Path("GetByCode")
    @Produces(MediaType.APPLICATION_XML)
    public Fleur find(@QueryParam("code") Long code) {
            return FleurBD.getFleur(code);
    }
}
 
