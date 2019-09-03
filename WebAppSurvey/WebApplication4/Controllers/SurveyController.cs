using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace WebApplication4.Controllers
{
    public class SurveyController : Controller
    {
        // GET: /Survey/
        public ActionResult Index()
        {
            return View(); 
        }

        //GET: /Survey/Welcome
        public ActionResult Welcome(string name, int numTimes = 1)
        {
            ViewBag.Message = "Hello " + name;
            ViewBag.NumTimes = numTimes;

            return View(); 

        }
    }
}