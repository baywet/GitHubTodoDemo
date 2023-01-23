using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    /// <summary>
    /// Provides operations to manage the lists property of the microsoft.graph.todo entity.
    /// </summary>
    public class EdiscoveryNoncustodialDataSource : DataSourceContainer, IParsable {
        /// <summary>User source or SharePoint site data source as non-custodial data source.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Security.DataSource DataSource { get; set; }
        /// <summary>Operation entity that represents the latest indexing for the non-custodial data source.</summary>
        public EdiscoveryIndexOperation LastIndexOperation { get; set; }
        /// <summary>
        /// Instantiates a new ediscoveryNoncustodialDataSource and sets the default values.
        /// </summary>
        public EdiscoveryNoncustodialDataSource() : base() {
            OdataType = "#microsoft.graph.security.ediscoveryNoncustodialDataSource";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new EdiscoveryNoncustodialDataSource CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new EdiscoveryNoncustodialDataSource();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"dataSource", n => { DataSource = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Security.DataSource>(GitHubTodoDemo.MicrosoftGraph.Models.Security.DataSource.CreateFromDiscriminatorValue); } },
                {"lastIndexOperation", n => { LastIndexOperation = n.GetObjectValue<EdiscoveryIndexOperation>(EdiscoveryIndexOperation.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Security.DataSource>("dataSource", DataSource);
            writer.WriteObjectValue<EdiscoveryIndexOperation>("lastIndexOperation", LastIndexOperation);
        }
    }
}
