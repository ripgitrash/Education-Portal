<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Java</title>
                
            </head>
            <body bgcolor="lightgreen">
                <center> <h1>Into To Java</h1></center>
<table border="1px solid blue" align="center" cellpadding="10px" cellspacing="10px">

<thead>
<tr>
</tr>
 <td>Codename</td>
<td>Year</td>
<td>Version</td>
 </thead>
<tbody>
<xsl:for-each select="java/new">
<tr>
<td><xsl:value-of select="Codename"/></td>
<td><xsl:value-of select="Year"/></td>
<td><xsl:value-of select="version"/></td>
</tr>
</xsl:for-each>
</tbody>
</table>
            </body>
        </html>
     </xsl:template>
</xsl:stylesheet>
