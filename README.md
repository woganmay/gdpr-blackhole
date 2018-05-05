gdpr-blackhole
==============

When it comes to GDPR, you have basically two options:

1. Become GDPR compliant, in which the first step is a [lengthy checklist](https://gdprchecklist.io), or
1. Just block the entire EU

This repo assists with the latter.

Disclaimer
----------

The GDPR is brand new legal territory. There's no clarity yet on how, when, or where certain regulations will be enforced. There's every chance the GDPR will come to apply only to major commercial operators, especially given the [crazy-high penalties](https://www.gdpreu.org/compliance/fines-and-penalties/) (Up to €10 million on the lower level).

That being said, if you're a small business (or side project) and you don't want to expose yourself to this sort of risk, preventing users from within the EU from using your services would go a long way to mitigating that risk. It's not bullet-proof, of course: EU residents can travel and use VPNs, and there's no guarantee that simply blocking the IP ranges of the EU is a perfect shield.

Finally, this project makes absolutely no warranties whatsoever. It affords no protections against GDPR enforcement, and is not a substitute for legal advice. 

About the UK
------------

As of right now, the United Kingdom is a member of the EU, and so the ranges are included (gb.txt) in both sets. If you'd rather remove them, I've included the compilation script. Just clone the repo, delete any countries you don't want to block, and run `php scripts/compile.php` to rebuild all 3 files.

Usage
-----

Inside this repo:

| Filename | Contents |
| --- | --- |
| eu-iso.txt | A list of the 2-digit ISO country codes ([source](https://europa.eu/european-union/about-eu/countries_en)) |
| eu-cidr4.txt | A list of all the IPv4 CIDR ranges for the EU |
| eu-cidr6.txt | A list of all the IPv6 CIDR ranges for the EU |
| eu-ranges.txt | A combined file with all IPv4 and IPv6 ranges |
| scripts/compile.php | Concatenates all the ranges together |
| zone4/* | Individual IPv4 range files per country |
| zone6/* | Individual IPv6 range files per country |

Just grab the files you need and plug them into whatever you use for a firewall. For PHP projects, the [IPSet project](https://github.com/wikimedia/IPSet) will save you a bunch of time.

Corrections & Support
---------------------

These lists of IP ranges were obtained from a third party. If you have any corrections to make, please submit a pull request with the details. 

License
-------

MIT